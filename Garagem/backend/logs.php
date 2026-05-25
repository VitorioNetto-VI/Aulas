<?php
// logs.php
require 'config.php';
require 'auth.php';

// Apenas admin pode ver logs
if (($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: admin.php');
    exit;
}

// Filtros
$filter_user = $_GET['user'] ?? null;
$filter_type = $_GET['type'] ?? '';
$filter_action = $_GET['action'] ?? '';
$limit = $_GET['limit'] ?? 100;

// Construir query
$sql = "SELECT l.*, u.name as user_name, u.email 
        FROM logs l 
        LEFT JOIN users u ON l.user_id = u.id 
        WHERE 1=1";
        
$params = [];

if ($filter_user && is_numeric($filter_user)) {
    $sql .= " AND l.user_id = ?";
    $params[] = $filter_user;
}

if ($filter_type && in_array($filter_type, ['info', 'warning', 'error', 'security'])) {
    $sql .= " AND l.log_type = ?";
    $params[] = $filter_type;
}

if ($filter_action) {
    $sql .= " AND l.action LIKE ?";
    $params[] = "%$filter_action%";
}

$sql .= " ORDER BY l.created_at DESC LIMIT ?";
$params[] = $limit;

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$logs = $stmt->fetchAll();

// Obter lista de usuários para filtro
$users = $pdo->query("SELECT id, name, email FROM users ORDER BY name")->fetchAll();

// Estatísticas
$stats = $pdo->query("
    SELECT 
        COUNT(*) as total,
        SUM(CASE WHEN log_type = 'info' THEN 1 ELSE 0 END) as info,
        SUM(CASE WHEN log_type = 'warning' THEN 1 ELSE 0 END) as warning,
        SUM(CASE WHEN log_type = 'error' THEN 1 ELSE 0 END) as error,
        SUM(CASE WHEN log_type = 'security' THEN 1 ELSE 0 END) as security
    FROM logs
")->fetch();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs do Sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .log-info { border-left-color: #3b82f6; }
        .log-warning { border-left-color: #f59e0b; }
        .log-error { border-left-color: #ef4444; }
        .log-security { border-left-color: #10b981; }
        
        pre {
            max-height: 200px;
            overflow-y: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto p-4">
        <!-- Cabeçalho -->
        <div class="bg-white rounded-lg shadow mb-6 p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">📋 Logs do Sistema</h1>
                    <p class="text-gray-600">Registro de atividades do sistema</p>
                </div>
                <div>
                    <a href="admin.php" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                        Voltar
                    </a>
                </div>
            </div>
            
            <!-- Estatísticas -->
            <div class="mt-4 grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="bg-blue-50 p-4 rounded">
                    <div class="text-2xl font-bold text-blue-700"><?= number_format($stats['total']) ?></div>
                    <div class="text-sm text-blue-600">Total</div>
                </div>
                <div class="bg-blue-50 p-4 rounded">
                    <div class="text-2xl font-bold text-blue-500"><?= number_format($stats['info']) ?></div>
                    <div class="text-sm text-blue-600">Info</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded">
                    <div class="text-2xl font-bold text-yellow-600"><?= number_format($stats['warning']) ?></div>
                    <div class="text-sm text-yellow-600">Warning</div>
                </div>
                <div class="bg-red-50 p-4 rounded">
                    <div class="text-2xl font-bold text-red-600"><?= number_format($stats['error']) ?></div>
                    <div class="text-sm text-red-600">Error</div>
                </div>
                <div class="bg-green-50 p-4 rounded">
                    <div class="text-2xl font-bold text-green-600"><?= number_format($stats['security']) ?></div>
                    <div class="text-sm text-green-600">Security</div>
                </div>
            </div>
        </div>

        <!-- Filtros -->
        <div class="bg-white rounded-lg shadow mb-6 p-6">
            <h2 class="text-lg font-semibold mb-4">Filtros</h2>
            <form method="get" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Usuário</label>
                    <select name="user" class="w-full border border-gray-300 rounded p-2">
                        <option value="">Todos</option>
                        <?php foreach ($users as $user): ?>
                        <option value="<?= $user['id'] ?>" <?= ($filter_user == $user['id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($user['name']) ?> (<?= $user['email'] ?>)
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo</label>
                    <select name="type" class="w-full border border-gray-300 rounded p-2">
                        <option value="">Todos</option>
                        <option value="info" <?= ($filter_type == 'info') ? 'selected' : '' ?>>Info</option>
                        <option value="warning" <?= ($filter_type == 'warning') ? 'selected' : '' ?>>Warning</option>
                        <option value="error" <?= ($filter_type == 'error') ? 'selected' : '' ?>>Error</option>
                        <option value="security" <?= ($filter_type == 'security') ? 'selected' : '' ?>>Security</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ação</label>
                    <input type="text" name="action" value="<?= htmlspecialchars($filter_action) ?>" 
                           class="w-full border border-gray-300 rounded p-2" placeholder="login, delete, create...">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Limite</label>
                    <select name="limit" class="w-full border border-gray-300 rounded p-2">
                        <option value="50" <?= ($limit == 50) ? 'selected' : '' ?>>50</option>
                        <option value="100" <?= ($limit == 100) ? 'selected' : '' ?>>100</option>
                        <option value="200" <?= ($limit == 200) ? 'selected' : '' ?>>200</option>
                        <option value="500" <?= ($limit == 500) ? 'selected' : '' ?>>500</option>
                    </select>
                </div>
                <div class="md:col-span-4">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Filtrar
                    </button>
                    <a href="logs.php" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 ml-2">
                        Limpar
                    </a>
                </div>
            </form>
        </div>

        <!-- Tabela de Logs -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Data/Hora</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Usuário</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tipo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ação</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Detalhes</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">IP</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php if (empty($logs)): ?>
                            <tr>
                                <td colspan="7" class="px-6 py-8 text-center text-gray-500">
                                    Nenhum log encontrado
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($logs as $log): ?>
                            <tr class="hover:bg-gray-50 border-l-4 
                                <?= $log['log_type'] == 'info' ? 'log-info' : 
                                   ($log['log_type'] == 'warning' ? 'log-warning' : 
                                   ($log['log_type'] == 'error' ? 'log-error' : 'log-security')) ?>">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    #<?= $log['id'] ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <?= date('d/m/Y', strtotime($log['created_at'])) ?>
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        <?= date('H:i:s', strtotime($log['created_at'])) ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php if ($log['user_name']): ?>
                                        <div class="text-sm font-medium text-gray-900">
                                            <?= htmlspecialchars($log['user_name']) ?>
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            <?= htmlspecialchars($log['email']) ?>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-gray-400">Sistema</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full
                                        <?= $log['log_type'] == 'info' ? 'bg-blue-100 text-blue-800' : 
                                           ($log['log_type'] == 'warning' ? 'bg-yellow-100 text-yellow-800' : 
                                           ($log['log_type'] == 'error' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800')) ?>">
                                        <?= $log['log_type'] ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 font-medium">
                                        <?= htmlspecialchars($log['action']) ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <?php if ($log['details']): ?>
                                        <details>
                                            <summary class="text-sm text-blue-600 cursor-pointer hover:text-blue-800">
                                                Ver detalhes
                                            </summary>
                                            <pre class="mt-2 text-xs text-gray-600 bg-gray-50 p-2 rounded">
<?= htmlspecialchars($log['details']) ?></pre>
                                        </details>
                                    <?php else: ?>
                                        <span class="text-gray-400 text-sm">—</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 font-mono">
                                        <?= htmlspecialchars($log['ip_address']) ?>
                                    </div>
                                    <?php if ($log['user_agent']): ?>
                                    <div class="text-xs text-gray-500 truncate max-w-xs">
                                        <?= htmlspecialchars(substr($log['user_agent'], 0, 50)) ?>...
                                    </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Paginação (simples) -->
            <?php if (count($logs) >= $limit): ?>
            <div class="px-6 py-4 border-t border-gray-200">
                <p class="text-sm text-gray-700">
                    Mostrando <?= count($logs) ?> registros
                    <a href="?limit=<?= $limit + 100 ?>&<?= http_build_query($_GET) ?>" 
                       class="text-blue-600 hover:text-blue-800 ml-4">
                        Carregar mais
                    </a>
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>