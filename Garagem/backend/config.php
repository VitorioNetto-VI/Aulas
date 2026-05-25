<?php
// config.php
session_start();

$pdo = new PDO(
    "mysql:host=69.49.241.16;dbname=gara4688_unicorn;charset=utf8",
    "gara4688_unicorn",
    "V1rtu@l777",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
);

// Função de audit melhorada
function audit($pdo, $user, $action, $details = null, $type = 'info') {
    try {
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
        $referer = $_SERVER['HTTP_REFERER'] ?? '';
        
        $stmt = $pdo->prepare("
            INSERT INTO logs(user_id, action, details, ip_address, user_agent, referer, log_type) 
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");
        
        $stmt->execute([
            $user, 
            $action, 
            $details,
            $ip,
            substr($userAgent, 0, 255), // Limitar tamanho
            substr($referer, 0, 500),
            $type
        ]);
        
        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        // Logar erro sem interromper o fluxo
        error_log("Erro na função audit: " . $e->getMessage());
        return false;
    }
}

// Criar tabela logs se não existir
function createLogsTable($pdo) {
    $sql = "CREATE TABLE IF NOT EXISTS logs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        action VARCHAR(255) NOT NULL,
        details TEXT,
        ip_address VARCHAR(45),
        user_agent VARCHAR(255),
        referer VARCHAR(500),
        log_type ENUM('info', 'warning', 'error', 'security') DEFAULT 'info',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_user_id (user_id),
        INDEX idx_created_at (created_at),
        INDEX idx_action (action),
        INDEX idx_log_type (log_type)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    try {
        $pdo->exec($sql);
        error_log("Tabela logs criada/verificada com sucesso");
    } catch (PDOException $e) {
        error_log("Erro ao criar tabela logs: " . $e->getMessage());
    }
}

// Verificar/criar tabela logs automaticamente
createLogsTable($pdo);

// Função auxiliar para logar ações do usuário
function logUserAction($pdo, $action, $details = null) {
    if (isset($_SESSION['user']['id'])) {
        return audit($pdo, $_SESSION['user']['id'], $action, $details);
    }
    return false;
}

// Função para obter logs (para admin)
function getAuditLogs($pdo, $limit = 100, $userId = null) {
    $sql = "SELECT l.*, u.name as user_name, u.email 
            FROM logs l 
            LEFT JOIN users u ON l.user_id = u.id";
    
    $params = [];
    
    if ($userId) {
        $sql .= " WHERE l.user_id = ?";
        $params[] = $userId;
    }
    
    $sql .= " ORDER BY l.created_at DESC LIMIT ?";
    $params[] = $limit;
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

// Função para limpar logs antigos (manutenção)
function cleanOldLogs($pdo, $days = 30) {
    $stmt = $pdo->prepare("DELETE FROM logs WHERE created_at < DATE_SUB(NOW(), INTERVAL ? DAY)");
    $stmt->execute([$days]);
    return $stmt->rowCount();
}

// Executar limpeza de logs antigos periodicamente (1% das vezes)
if (rand(1, 100) === 1) {
    cleanOldLogs($pdo, 90); // Manter logs por 90 dias
}
?>