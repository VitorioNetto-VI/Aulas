<?php 
require 'config.php'; 
require 'auth.php';

// Verificar permissões do usuário
$userId = $_SESSION['user']['id'];
$userRole = $_SESSION['user']['role'] ?? 'user';
$usernome = $_SESSION['user']['name'];

// Processar DELETE
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $postId = $_GET['delete'];
    
    // Log da tentativa de delete
    audit($pdo, $userId, "delete_attempt", json_encode([
        'post_id' => $postId,
        'method' => 'GET',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'timestamp' => date('Y-m-d H:i:s')
    ], JSON_UNESCAPED_UNICODE), 'info');
    
    // Verificar se o post existe e se o usuário tem acesso a ele
    if ($userRole === 'admin') {
        // Admin pode deletar qualquer post
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$postId]);
    } else {
        // Usuário comum só pode deletar seus próprios posts
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ? AND created_by = ?");
        $stmt->execute([$postId, $userId]);
    }
    
    $post = $stmt->fetch();
    
    if ($post) {
        // Verificar se usuário tem permissão (admin ou criador do post)
        if ($userRole === 'admin' || $post['created_by'] == $userId) {
            try {
                // Iniciar transação
                $pdo->beginTransaction();
                
                // 1. Coletar informações antes de deletar
                $postDataBeforeDelete = [
                    'id' => $post['id'],
                    'title' => $post['title'],
                    'slug' => $post['slug'],
                    'summary' => $post['summary'],
                    'meta_title' => $post['meta_title'],
                    'meta_desc' => $post['meta_desc'],
                    'created_at' => $post['created_at'],
                    'created_by' => $post['created_by']
                ];
                
                // 2. Deletar imagens do post
                $images = [
                    'thumb' => $post['thumb'],
                    'cover' => $post['cover'],
                    'footer' => $post['footer_img']
                ];
                
                $imagesDeleted = [];
                $uploadDir = dirname(__DIR__) . '/uploads/';
                
                foreach ($images as $type => $image) {
                    if (!empty($image)) {
                        $filePath = $uploadDir . $image;
                        if (file_exists($filePath)) {
                            if (unlink($filePath)) {
                                $imagesDeleted[$type] = $image;
                            } else {
                                throw new Exception("Falha ao deletar imagem: {$type}/{$image}");
                            }
                        }
                    }
                }
                
                // 3. Deletar o post do banco
                $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
                $stmt->execute([$postId]);
                
                // 4. Verificar se realmente foi deletado
                $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE id = ?");
                $checkStmt->execute([$postId]);
                $stillExists = $checkStmt->fetchColumn();
                
                if ($stillExists > 0) {
                    throw new Exception("Post não foi deletado do banco de dados");
                }
                
                // 5. Commit da transação
                $pdo->commit();
                
                // 6. Log da ação com detalhes completos
                audit($pdo, $userId, "post_deleted", json_encode([
                    'post_data_before_delete' => $postDataBeforeDelete,
                    'images_deleted' => $imagesDeleted,
                    'deleted_by' => [
                        'id' => $userId,
                        'name' => $usernome,
                        'role' => $userRole
                    ],
                    'deletion_method' => 'manual_admin_panel',
                    'deletion_time' => date('Y-m-d H:i:s'),
                    'server_info' => [
                        'php_version' => PHP_VERSION,
                        'server_software' => $_SERVER['SERVER_SOFTWARE'] ?? 'unknown',
                        'server_name' => $_SERVER['SERVER_NAME'] ?? 'unknown'
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), 'warning');
                
                // 7. Mensagem de sucesso
                $_SESSION['success_message'] = "✅ Post <strong>'{$post['title']}'</strong> excluído com sucesso!";
                
            } catch (Exception $e) {
                // Rollback em caso de erro
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                
                // Log do erro detalhado
                audit($pdo, $userId, "post_delete_error", json_encode([
                    'post_id' => $postId,
                    'error_type' => get_class($e),
                    'error_message' => $e->getMessage(),
                    'error_code' => $e->getCode(),
                    'error_file' => $e->getFile(),
                    'error_line' => $e->getLine(),
                    'error_trace' => $e->getTraceAsString(),
                    'timestamp' => date('Y-m-d H:i:s'),
                    'transaction_rolled_back' => true,
                    'images_deleted_before_error' => $imagesDeleted ?? []
                ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), 'error');
                
                $_SESSION['error_message'] = "❌ Erro ao excluir post: " . htmlspecialchars($e->getMessage());
            }
        } else {
            // Tentativa de exclusão não autorizada
            audit($pdo, $userId, "unauthorized_delete_attempt", json_encode([
                'post_id' => $postId,
                'post_data' => [
                    'title' => $post['title'],
                    'author_id' => $post['created_by'],
                    'author_name' => $pdo->query("SELECT name FROM users WHERE id = " . (int)$post['created_by'])->fetchColumn() ?? 'unknown'
                ],
                'attempted_by' => [
                    'id' => $userId,
                    'name' => $usernome,
                    'role' => $userRole
                ],
                'permission_check' => [
                    'is_admin' => ($userRole === 'admin'),
                    'is_owner' => ($post['created_by'] == $userId),
                    'allowed' => false
                ],
                'timestamp' => date('Y-m-d H:i:s'),
                'security_level' => 'high'
            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), 'security');
            
            $_SESSION['error_message'] = "⛔ <strong>Acesso negado!</strong> Você não tem permissão para excluir este post.";
        }
    } else {
        // Post não encontrado ou usuário não tem acesso
        audit($pdo, $userId, "delete_post_not_found", json_encode([
            'post_id' => $postId,
            'search_time' => date('Y-m-d H:i:s'),
            'user_role' => $userRole,
            'user_id' => $userId,
            'rows_found' => 0,
            'possible_reasons' => [
                'already_deleted',
                'id_invalido',
                'database_error',
                'no_permission_to_view'
            ]
        ], JSON_UNESCAPED_UNICODE), 'error');
        
        $_SESSION['error_message'] = "⚠️ Post não encontrado ou você não tem permissão para acessá-lo!";
    }
    
    // Redirecionar de volta para o admin
    header("Location: admin.php");
    exit;
}

// Buscar posts com base na permissão do usuário
if ($userRole === 'admin') {
    // Admin vê todos os posts
    $query = "SELECT p.*, u.name as author_name FROM posts p 
              LEFT JOIN users u ON p.created_by = u.id 
              ORDER BY p.id DESC";
    $posts = $pdo->query($query)->fetchAll();
} else {
    // Usuário comum vê apenas seus próprios posts
    $query = "SELECT p.*, u.name as author_name FROM posts p 
              LEFT JOIN users u ON p.created_by = u.id 
              WHERE p.created_by = ?
              ORDER BY p.id DESC";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$userId]);
    $posts = $stmt->fetchAll();
}

// Contar total de posts para exibição
$totalPosts = count($posts);
$userPostsCount = 0;

if ($userRole !== 'admin') {
    // Contar apenas os posts do usuário atual
    $userPostsCount = $totalPosts;
} else {
    // Para admin, contar também os posts próprios
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE created_by = ?");
    $stmt->execute([$userId]);
    $userPostsCount = $stmt->fetchColumn();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
    // Modal de confirmação avançado
    function showDeleteModal(postId, postTitle) {
        const modal = document.getElementById('deleteModal');
        const modalTitle = document.getElementById('modalPostTitle');
        const modalId = document.getElementById('modalPostId');
        
        modalTitle.textContent = postTitle;
        modalId.value = postId;
        modal.classList.remove('hidden');
    }
    
    function hideDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
    
    function executeDelete() {
        const postId = document.getElementById('modalPostId').value;
        document.getElementById('loading').classList.remove('hidden');
        window.location.href = `?delete=${postId}`;
    }
    </script>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Loading overlay -->
    <div id="loading" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <div class="flex flex-col items-center">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mb-4"></div>
                <p class="text-gray-700">Excluindo post...</p>
            </div>
        </div>
    </div>
    
    <!-- Modal de confirmação -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-40">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-md w-full mx-4">
            <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 bg-red-100 rounded-full">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
            </div>
            
            <h3 class="text-lg font-medium text-gray-900 mb-2 text-center">Confirmar exclusão</h3>
            <p class="text-sm text-gray-500 mb-4 text-center">
                Tem certeza que deseja excluir o post <strong id="modalPostTitle"></strong>?
            </p>
            <p class="text-xs text-red-600 bg-red-50 p-3 rounded mb-4">
                ⚠️ Esta ação não pode ser desfeita! Todas as imagens do post também serão excluídas.
            </p>
            
            <div class="flex justify-end gap-3">
                <button type="button" onclick="hideDeleteModal()" 
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
                    Cancelar
                </button>
                <button type="button" onclick="executeDelete()"
                        class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700">
                    Excluir permanentemente
                </button>
            </div>
            
            <input type="hidden" id="modalPostId" value="">
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-4">
        <!-- Cabeçalho -->
        <div class="bg-white rounded-lg shadow mb-6 p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Painel Administrativo</h1>
                    <p class="text-gray-600">
                        <?php if ($userRole === 'admin'): ?>
                            🛡️ Modo Administrador - Visualizando todos os posts
                        <?php else: ?>
                            👤 Modo Usuário - Visualizando apenas seus posts
                        <?php endif; ?>
                    </p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <span class="text-gray-700">Olá, <strong><?= htmlspecialchars($usernome) ?></strong></span>
                        <div class="text-xs text-gray-500">
                            <?= $userRole === 'admin' ? 'Administrador' : 'Usuário' ?>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="editor.php" 
                           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                            + Novo Post
                        </a>
                        <?php if ($userRole === 'admin'): ?>
                            <a href="users/index.php" 
                               class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 text-sm">
                                Usuários
                            </a>
                            <a href="logs.php" 
                               class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 text-sm">
                                Logs
                            </a>
                        <?php endif; ?>
                        <a href="logout.php" 
                           class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mensagens -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                ✅ <?= $_SESSION['success_message'] ?>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                ❌ <?= $_SESSION['error_message'] ?>
                <?php unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <!-- Estatísticas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total de Posts</p>
                        <p class="text-2xl font-bold"><?= $totalPosts ?></p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Meus Posts</p>
                        <p class="text-2xl font-bold"><?= $userPostsCount ?></p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Permissões</p>
                        <p class="text-lg font-bold">
                            <?= $userRole === 'admin' ? 'Administrador' : 'Usuário' ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de Posts -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">
                            <?php if ($userRole === 'admin'): ?>
                                Todos os Posts
                            <?php else: ?>
                                Meus Posts
                            <?php endif; ?>
                        </h2>
                        <p class="text-sm text-gray-600">
                            <?php if ($userRole === 'admin'): ?>
                                Administrando todos os posts do sistema
                            <?php else: ?>
                                Gerenciando apenas seus posts
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <?php if ($userRole === 'admin'): ?>
                            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded-full">
                                🛡️ Admin
                            </span>
                        <?php endif; ?>
                        <span class="text-sm text-gray-600">
                            <?= $totalPosts ?> post<?= $totalPosts != 1 ? 's' : '' ?>
                        </span>
                    </div>
                </div>
            </div>
            
            <?php if (empty($posts)): ?>
                <div class="p-8 text-center">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <p class="text-gray-500 mb-4">
                        <?php if ($userRole === 'admin'): ?>
                            Nenhum post encontrado no sistema
                        <?php else: ?>
                            Você ainda não criou nenhum post
                        <?php endif; ?>
                    </p>
                    <a href="editor.php" class="text-blue-600 hover:text-blue-800 font-medium">
                        Crie seu primeiro post →
                    </a>
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Título
                                </th>
                                <?php if ($userRole === 'admin'): ?>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Autor
                                </th>
                                <?php endif; ?>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Data
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach($posts as $p): 
                                $isOwnPost = ($p['created_by'] == $userId);
                            ?>
                            <tr class="hover:bg-gray-50 <?= $isOwnPost ? 'bg-blue-50' : '' ?>">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <?php if (!empty($p['thumb'])): ?>
                                        <div class="flex-shrink-0 h-10 w-10 mr-3">
                                            <img class="h-10 w-10 rounded object-cover" 
                                                 src="../uploads/<?= htmlspecialchars($p['thumb']) ?>" 
                                                 alt="Thumbnail">
                                        </div>
                                        <?php endif; ?>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                <?= htmlspecialchars($p['title']) ?>
                                                <?php if ($isOwnPost): ?>
                                                    <span class="ml-1 text-xs text-blue-600">(seu)</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                <?= htmlspecialchars($p['slug']) ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <?php if ($userRole === 'admin'): ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"><?= htmlspecialchars($p['author_name'] ?? 'N/A') ?></div>
                                    <div class="text-xs text-gray-500">
                                        ID: <?= $p['created_by'] ?>
                                        <?php if ($p['created_by'] == $userId): ?>
                                            <span class="text-blue-600">(você)</span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <?php endif; ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <?= date('d/m/Y', strtotime($p['created_at'])) ?>
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        <?= date('H:i', strtotime($p['created_at'])) ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full 
                                        <?= $isOwnPost ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                                        <?= $isOwnPost ? 'Próprio' : 'Outro autor' ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <?php if ($userRole === 'admin' || $isOwnPost): ?>
                                        <a href="editor.php?id=<?= $p['id'] ?>" 
                                           class="text-blue-600 hover:text-blue-900 px-2 py-1 rounded hover:bg-blue-50">
                                            Editar
                                        </a>
                                        <button onclick="showDeleteModal(<?= $p['id'] ?>, '<?= htmlspecialchars(addslashes($p['title'])) ?>')" 
                                                class="text-red-600 hover:text-red-900 px-2 py-1 rounded hover:bg-red-50">
                                            Excluir
                                        </button>
                                        <?php else: ?>
                                        <span class="text-gray-400 px-2 py-1">Apenas visualização</span>
                                        <?php endif; ?>
                                        <a href="../blog/<?= $p['slug'] ?>" target="_blank" 
                                           class="text-green-600 hover:text-green-900 px-2 py-1 rounded hover:bg-green-50">
                                            Visualizar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Rodapé -->
        <div class="mt-6 text-center text-sm text-gray-500">
            <p>
                Sistema Admin • 
                <?php if ($userRole === 'admin'): ?>
                    Total de posts: <?= $totalPosts ?> • 
                <?php endif; ?>
                Meus posts: <?= $userPostsCount ?> • 
                Usuário: <?= htmlspecialchars($usernome) ?> (<?= $userRole === 'admin' ? 'Administrador' : 'Usuário' ?>)
            </p>
        </div>
    </div>
</body>
</html>