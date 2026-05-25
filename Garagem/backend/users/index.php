<?php 
require '../config.php'; 
require '../auth.php';

// Verificar se usuário é admin
$userRole = $_SESSION['user']['role'] ?? 'user';
$userName = $_SESSION['user']['name'] ?? 'Usuário';

if ($userRole !== 'admin') {
    header('Location: ../admin.php');
    exit;
}

// Buscar usuários
$stmt = $pdo->query("SELECT id, name, email, role, created_at FROM users ORDER BY created_at DESC");
$users = $stmt->fetchAll();

// Contar usuários por tipo
$totalUsers = count($users);
$adminCount = 0;
$userCount = 0;

foreach ($users as $user) {
    if ($user['role'] === 'admin') {
        $adminCount++;
    } else {
        $userCount++;
    }
}

// Processar exclusão se houver parâmetro DELETE
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $userId = $_GET['delete'];
    
    // Não permitir excluir a si mesmo
    if ($userId == $_SESSION['user']['id']) {
        $_SESSION['error_message'] = "❌ Você não pode excluir sua própria conta!";
        header("Location: index.php");
        exit;
    }
    
    // Verificar se usuário existe
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $userToDelete = $stmt->fetch();
    
    if ($userToDelete) {
        try {
            // Log antes da exclusão
            audit($pdo, $_SESSION['user']['id'], "user_deletion_attempt", json_encode([
                'target_user_id' => $userId,
                'target_user_name' => $userToDelete['name'],
                'target_user_email' => $userToDelete['email'],
                'deleted_by' => [
                    'id' => $_SESSION['user']['id'],
                    'name' => $_SESSION['user']['name']
                ]
            ], JSON_UNESCAPED_UNICODE), 'warning');
            
            // Verificar se o usuário tem posts
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE created_by = ?");
            $stmt->execute([$userId]);
            $postCount = $stmt->fetchColumn();
            
            if ($postCount > 0) {
                // Se o usuário tem posts, não permitir exclusão
                $_SESSION['error_message'] = "❌ Não é possível excluir este usuário porque ele tem $postCount post(s) associado(s).<br>Transfira os posts para outro usuário primeiro.";
            } else {
                // Excluir usuário
                $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
                $stmt->execute([$userId]);
                
                // Log da exclusão
                audit($pdo, $_SESSION['user']['id'], "user_deleted", json_encode([
                    'deleted_user' => $userToDelete,
                    'deleted_by' => [
                        'id' => $_SESSION['user']['id'],
                        'name' => $_SESSION['user']['name']
                    ],
                    'timestamp' => date('Y-m-d H:i:s')
                ], JSON_UNESCAPED_UNICODE), 'warning');
                
                $_SESSION['success_message'] = "✅ Usuário <strong>{$userToDelete['name']}</strong> excluído com sucesso!";
            }
        } catch (Exception $e) {
            $_SESSION['error_message'] = "❌ Erro ao excluir usuário: " . htmlspecialchars($e->getMessage());
        }
    } else {
        $_SESSION['error_message'] = "❌ Usuário não encontrado!";
    }
    
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @media (max-width: 640px) {
            .mobile-stats {
                grid-template-columns: repeat(1, 1fr) !important;
            }
            .mobile-table-header {
                display: none;
            }
            .mobile-table-row {
                flex-direction: column;
                border: 1px solid #e5e7eb;
                border-radius: 0.5rem;
                padding: 1rem;
                margin-bottom: 1rem;
            }
        }
    </style>
    
    <script>
    // Modal de confirmação
    function showDeleteModal(userId, userName) {
        const modal = document.getElementById('deleteModal');
        const modalName = document.getElementById('modalUserName');
        const modalId = document.getElementById('modalUserId');
        
        modalName.textContent = userName;
        modalId.value = userId;
        modal.classList.remove('hidden');
    }
    
    function hideDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
    
    function executeDelete() {
        const userId = document.getElementById('modalUserId').value;
        window.location.href = `?delete=${userId}`;
    }
    </script>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Modal de confirmação de exclusão -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-md w-full mx-4">
            <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 bg-red-100 rounded-full">
                <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
            </div>
            
            <h3 class="text-lg font-medium text-gray-900 mb-2 text-center">Confirmar exclusão</h3>
            <p class="text-sm text-gray-500 mb-4 text-center">
                Tem certeza que deseja excluir o usuário <strong id="modalUserName"></strong>?
            </p>
            <p class="text-xs text-red-600 bg-red-50 p-3 rounded mb-4">
                ⚠️ Esta ação não pode ser desfeita! O usuário perderá acesso imediatamente.
            </p>
            
            <div class="flex justify-end gap-3">
                <button type="button" onclick="hideDeleteModal()" 
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors">
                    Cancelar
                </button>
                <button type="button" onclick="executeDelete()"
                        class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition-colors">
                    Excluir
                </button>
            </div>
            
            <input type="hidden" id="modalUserId" value="">
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-4">
        <!-- Cabeçalho -->
        <div class="bg-white rounded-lg shadow mb-6 p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">Gerenciamento de Usuários</h1>
                            <p class="text-gray-600">Gerencie as contas de usuários do sistema</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                    <a href="../admin.php" 
                       class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors text-center">
                        <i class="fas fa-arrow-left mr-2"></i> Voltar
                    </a>
                    <a href="create.php" 
                       class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors text-center">
                        <i class="fas fa-plus mr-2"></i> Novo Usuário
                    </a>
                </div>
            </div>
        </div>

        <!-- Mensagens -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg border border-green-200">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    <div><?= $_SESSION['success_message'] ?></div>
                </div>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg border border-red-200">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle text-red-500 mr-3"></i>
                    <div><?= $_SESSION['error_message'] ?></div>
                </div>
                <?php unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <!-- Estatísticas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6 mobile-stats">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total de Usuários</p>
                        <p class="text-2xl font-bold"><?= $totalUsers ?></p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                        <i class="fas fa-user-shield text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Administradores</p>
                        <p class="text-2xl font-bold"><?= $adminCount ?></p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                        <i class="fas fa-user text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Usuários Comuns</p>
                        <p class="text-2xl font-bold"><?= $userCount ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de Usuários -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">Lista de Usuários</h2>
                        <p class="text-sm text-gray-600">Gerencie as contas e permissões</p>
                    </div>
                    <div class="text-sm text-gray-500">
                        <span class="px-2 py-1 bg-gray-100 rounded">Total: <?= $totalUsers ?></span>
                    </div>
                </div>
            </div>
            
            <?php if (empty($users)): ?>
                <div class="p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 text-gray-400">
                        <i class="fas fa-users text-5xl"></i>
                    </div>
                    <p class="text-gray-500 mb-4">Nenhum usuário cadastrado</p>
                    <a href="create.php" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                        <i class="fas fa-plus mr-2"></i> Adicionar primeiro usuário
                    </a>
                </div>
            <?php else: ?>
                <!-- Desktop Table (hidden on mobile) -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Usuário
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    E-mail
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tipo
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cadastrado em
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach($users as $u): 
                                $isCurrentUser = ($u['id'] == $_SESSION['user']['id']);
                            ?>
                            <tr class="hover:bg-gray-50 <?= $isCurrentUser ? 'bg-blue-50' : '' ?>">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 mr-3 flex items-center justify-center bg-blue-100 rounded-full">
                                            <span class="text-blue-600 font-semibold">
                                                <?= strtoupper(substr($u['name'], 0, 1)) ?>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                <?= htmlspecialchars($u['name']) ?>
                                                <?php if ($isCurrentUser): ?>
                                                    <span class="ml-2 text-xs text-blue-600 bg-blue-100 px-2 py-1 rounded-full">
                                                        Você
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-xs text-gray-500">
                                                ID: <?= $u['id'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <?= htmlspecialchars($u['email']) ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 text-xs rounded-full 
                                        <?= $u['role'] === 'admin' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                                        <?= $u['role'] === 'admin' ? 'Administrador' : 'Usuário' ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <?= date('d/m/Y', strtotime($u['created_at'])) ?>
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        <?= date('H:i', strtotime($u['created_at'])) ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="edit.php?id=<?= $u['id'] ?>" 
                                           class="text-blue-600 hover:text-blue-900 px-3 py-1 rounded hover:bg-blue-50 transition-colors">
                                            <i class="fas fa-edit mr-1"></i> Editar
                                        </a>
                                        <?php if (!$isCurrentUser): ?>
                                        <button onclick="showDeleteModal(<?= $u['id'] ?>, '<?= htmlspecialchars(addslashes($u['name'])) ?>')" 
                                                class="text-red-600 hover:text-red-900 px-3 py-1 rounded hover:bg-red-50 transition-colors">
                                            <i class="fas fa-trash mr-1"></i> Excluir
                                        </button>
                                        <?php else: ?>
                                        <span class="text-gray-400 px-3 py-1" title="Você não pode excluir sua própria conta">
                                            <i class="fas fa-ban mr-1"></i> Bloqueado
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Mobile Cards (shown only on mobile) -->
                <div class="md:hidden p-4">
                    <?php foreach($users as $u): 
                        $isCurrentUser = ($u['id'] == $_SESSION['user']['id']);
                    ?>
                    <div class="mobile-table-row bg-white mb-4">
                        <div class="flex items-center mb-3">
                            <div class="flex-shrink-0 h-12 w-12 mr-3 flex items-center justify-center bg-blue-100 rounded-full">
                                <span class="text-blue-600 font-semibold text-lg">
                                    <?= strtoupper(substr($u['name'], 0, 1)) ?>
                                </span>
                            </div>
                            <div class="flex-1">
                                <div class="font-medium text-gray-900">
                                    <?= htmlspecialchars($u['name']) ?>
                                    <?php if ($isCurrentUser): ?>
                                        <span class="ml-2 text-xs text-blue-600 bg-blue-100 px-2 py-1 rounded-full">
                                            Você
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="text-sm text-gray-600">
                                    <?= htmlspecialchars($u['email']) ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-2 mb-3">
                            <div>
                                <div class="text-xs text-gray-500">Tipo</div>
                                <span class="inline-block px-2 py-1 text-xs rounded-full 
                                    <?= $u['role'] === 'admin' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                                    <?= $u['role'] === 'admin' ? 'Administrador' : 'Usuário' ?>
                                </span>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Cadastrado em</div>
                                <div class="text-sm"><?= date('d/m/Y', strtotime($u['created_at'])) ?></div>
                            </div>
                        </div>
                        
                        <div class="pt-3 border-t">
                            <div class="flex justify-between">
                                <a href="edit.php?id=<?= $u['id'] ?>" 
                                   class="flex-1 mr-2 px-3 py-2 bg-blue-50 text-blue-700 rounded text-center hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit mr-1"></i> Editar
                                </a>
                                <?php if (!$isCurrentUser): ?>
                                <button onclick="showDeleteModal(<?= $u['id'] ?>, '<?= htmlspecialchars(addslashes($u['name'])) ?>')" 
                                        class="flex-1 ml-2 px-3 py-2 bg-red-50 text-red-700 rounded text-center hover:bg-red-100 transition-colors">
                                    <i class="fas fa-trash mr-1"></i> Excluir
                                </button>
                                <?php else: ?>
                                <button class="flex-1 ml-2 px-3 py-2 bg-gray-100 text-gray-500 rounded text-center cursor-not-allowed">
                                    <i class="fas fa-ban mr-1"></i> Bloqueado
                                </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <!-- Paginação ou rodapé da tabela -->
            <div class="px-6 py-4 border-t bg-gray-50">
                <div class="flex flex-col sm:flex-row justify-between items-center text-sm text-gray-600">
                    <div class="mb-2 sm:mb-0">
                        Mostrando <span class="font-medium"><?= $totalUsers ?></span> usuário(s)
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs">
                            <i class="fas fa-user-shield text-green-500 mr-1"></i> Admin: <?= $adminCount ?>
                        </span>
                        <span class="text-xs">
                            <i class="fas fa-user text-gray-500 mr-1"></i> Usuário: <?= $userCount ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Rodapé -->
        <div class="mt-6 text-center text-sm text-gray-500">
            <p>
                <i class="fas fa-users mr-1"></i> Gerenciamento de Usuários • 
                Logado como: <strong><?= htmlspecialchars($userName) ?></strong> • 
                Última atualização: <?= date('d/m/Y H:i') ?>
            </p>
        </div>
    </div>
</body>
</html>
