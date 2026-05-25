<?php 
require 'config.php';
session_start();

// Rate Limiting - Configurações
$MAX_ATTEMPTS = 5; // Número de tentativas antes de bloquear
$LOCKOUT_TIME = 900; // 15 minutos em segundos
$error = '';

// Funções de segurança
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function getClientIP() {
    $ip_keys = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'];
    
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER)) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }
    }
    return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
}

// Função de Rate Limiting - CORRIGIDA
function checkRateLimit($pdo, $email = null) {
    global $LOCKOUT_TIME;
    
    $ip = getClientIP();
    $now = time();
    
    // Primeiro, limpar tentativas antigas (mais de 1 hora)
    $clearTime = $now - 3600;
    $pdo->prepare("DELETE FROM login_attempts WHERE last_attempt < ?")->execute([$clearTime]);
    
    // Verificar bloqueio por IP
    $stmt = $pdo->prepare("SELECT locked_until FROM login_attempts WHERE ip = ? AND locked_until > ?");
    $stmt->execute([$ip, $now]);
    $ipLocked = $stmt->fetch();
    
    if ($ipLocked) {
        $remaining = $ipLocked['locked_until'] - $now;
        return [
            'blocked' => true,
            'message' => "Muitas tentativas. Tente novamente em " . ceil($remaining / 60) . " minutos.",
            'time' => $remaining
        ];
    }
    
    // Verificar bloqueio por email
    if ($email) {
        $stmt = $pdo->prepare("SELECT locked_until FROM login_attempts WHERE email = ? AND locked_until > ?");
        $stmt->execute([$email, $now]);
        $emailLocked = $stmt->fetch();
        
        if ($emailLocked) {
            $remaining = $emailLocked['locked_until'] - $now;
            return [
                'blocked' => true,
                'message' => "Conta temporariamente bloqueada. Tente novamente em " . ceil($remaining / 60) . " minutos.",
                'time' => $remaining
            ];
        }
    }
    
    return ['blocked' => false];
}

// Registrar tentativa de login - CORRIGIDA
function recordLoginAttempt($pdo, $email, $success) {
    $ip = getClientIP();
    $now = time();
    
    if ($success) {
        // Se login bem-sucedido, remover as tentativas para este email e IP
        $pdo->prepare("DELETE FROM login_attempts WHERE email = ? OR ip = ?")->execute([$email, $ip]);
    } else {
        // Para tentativas por EMAIL
        $stmt = $pdo->prepare("SELECT attempts FROM login_attempts WHERE email = ? AND ip = ?");
        $stmt->execute([$email, $ip]);
        $attempt = $stmt->fetch();
        
        if ($attempt) {
            $new_attempts = $attempt['attempts'] + 1;
            $locked_until = 0;
            
            // Bloquear apenas após 5 tentativas
            if ($new_attempts >= 5) {
                $locked_until = $now + 900; // 15 minutos
            }
            
            $stmt = $pdo->prepare("UPDATE login_attempts SET attempts = ?, last_attempt = ?, locked_until = ? WHERE email = ? AND ip = ?");
            $stmt->execute([$new_attempts, $now, $locked_until, $email, $ip]);
        } else {
            // Primeira tentativa falha - NÃO BLOQUEIA
            $stmt = $pdo->prepare("INSERT INTO login_attempts (ip, email, attempts, last_attempt, locked_until) VALUES (?, ?, 1, ?, 0)");
            $stmt->execute([$ip, $email, $now]);
        }
        
        // Para tentativas por IP (independente do email)
        $stmt = $pdo->prepare("SELECT attempts FROM login_attempts WHERE ip = ? AND email IS NULL");
        $stmt->execute([$ip]);
        $ipAttempt = $stmt->fetch();
        
        if ($ipAttempt) {
            $new_ip_attempts = $ipAttempt['attempts'] + 1;
            $locked_until = 0;
            
            // Bloquear IP após 10 tentativas falhas
            if ($new_ip_attempts >= 10) {
                $locked_until = $now + 900;
            }
            
            $stmt = $pdo->prepare("UPDATE login_attempts SET attempts = ?, last_attempt = ?, locked_until = ? WHERE ip = ? AND email IS NULL");
            $stmt->execute([$new_ip_attempts, $now, $locked_until, $ip]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO login_attempts (ip, email, attempts, last_attempt, locked_until) VALUES (?, NULL, 1, ?, 0)");
            $stmt->execute([$ip, $now]);
        }
    }
}

// Processar login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar Rate Limiting antes de processar
    $rateLimit = checkRateLimit($pdo);
    if ($rateLimit['blocked']) {
        $error = $rateLimit['message'];
    } else {
        // Sanitização e validação
        $email = sanitizeInput($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        
        // Validação de email
        if (!validateEmail($email)) {
            $error = 'Email inválido!';
            recordLoginAttempt($pdo, $email, false);
        } elseif (empty($password)) {
            $error = 'Senha é obrigatória!';
            recordLoginAttempt($pdo, $email, false);
        } else {
            // Buscar usuário
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
            $stmt->execute([$email]);
            $u = $stmt->fetch();
            
            if ($u && password_verify($password, $u['password'])) {
                // Login bem-sucedido
                recordLoginAttempt($pdo, $email, true);
                
                $_SESSION['user'] = [
                    'id'   => $u['id'],
                    'name' => $u['name'],
                    'role' => $u['role'],
                    'login_time' => time(),
                    'session_id' => session_id()
                ];
                
                // Regenerar ID da sessão
                session_regenerate_id(true);
                
                // Redirecionar
                header("Location: admin.php");
                exit;
            } else {
                // Login falhou
                $error = 'Email ou senha incorretos!';
                recordLoginAttempt($pdo, $email, false);
                
                // Adicionar delay progressivo para força bruta
                $stmt = $pdo->prepare("SELECT attempts FROM login_attempts WHERE email = ? AND ip = ?");
                $stmt->execute([$email, getClientIP()]);
                $attempt = $stmt->fetch();
                
                if ($attempt) {
                    // Delay progressivo: 1s após 2 tentativas, 2s após 3, 3s após 4
                    if ($attempt['attempts'] >= 4) {
                        sleep(3);
                    } elseif ($attempt['attempts'] >= 3) {
                        sleep(2);
                    } elseif ($attempt['attempts'] >= 2) {
                        sleep(1);
                    }
                }
            }
        }
    }
}

// Verificar se usuário já está logado
if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Prevenir múltiplos envios do formulário
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            let isSubmitting = false;
            
            form.addEventListener('submit', function(e) {
                if (isSubmitting) {
                    e.preventDefault();
                    return;
                }
                
                // Adicionar tempo mínimo de processamento visual
                const button = form.querySelector('button[type="submit"]');
                const originalText = button.innerHTML;
                button.innerHTML = '<span class="flex items-center justify-center"><svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processando...</span>';
                button.disabled = true;
                
                isSubmitting = true;
                setTimeout(() => {
                    button.disabled = false;
                    button.innerHTML = originalText;
                    isSubmitting = false;
                }, 2000);
            });
        });
    </script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Login</h1>
                <p class="text-gray-600">Acesse sua conta para continuar</p>
            </div>
            
            <?php if ($error): ?>
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg flex items-center">
                    <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-red-700 text-sm"><?= htmlspecialchars($error) ?></span>
                </div>
            <?php endif; ?>
            
            <form method="post" class="space-y-6" autocomplete="off">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        maxlength="255"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="seu@email.com"
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        autocomplete="email"
                    >
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Senha</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required 
                        minlength="8"
                        maxlength="100"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="••••••••"
                        autocomplete="current-password"
                    >
                </div>
                
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>
                    </label>
                    
                    <a hidden href="password/forgot.php" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition duration-200">
                        Esqueci a senha
                    </a>
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 px-4 rounded-lg font-medium hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 transform hover:-translate-y-0.5"
                >
                    Entrar na conta
                </button>
            </form>
            
            <div hidden class="mt-8 pt-8 border-t border-gray-200 text-center">
                <p class="text-sm text-gray-600">
                    Não tem uma conta?
                    <a href="register.php" class="text-blue-600 hover:text-blue-800 font-medium ml-1">
                        Criar conta
                    </a>
                </p>
            </div>
        </div>
        
        <div class="mt-6 text-center">
            <p class="text-xs text-gray-500">
                © <?= date('Y') ?> Sistema. Todos os direitos reservados.<br>
                <span class="text-gray-400">Segurança: Bloqueio após 5 tentativas falhas</span>
            </p>
        </div>
    </div>
</body>
</html>