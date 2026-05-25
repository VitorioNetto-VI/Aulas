<?php require 'config.php'; require 'auth.php';
$posts=$pdo->query("SELECT COUNT(*) FROM posts")->fetchColumn();
$users=$pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$logs=$pdo->query("SELECT COUNT(*) FROM logs")->fetchColumn();
?>
<!DOCTYPE html><html><head>
<script src="https://cdn.tailwindcss.com"></script>
</head><body class="p-6 bg-gray-100">
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="bg-white p-4 rounded shadow">Posts: <?=$posts?></div>
<div class="bg-white p-4 rounded shadow">Usuários: <?=$users?></div>
<div class="bg-white p-4 rounded shadow">Logs: <?=$logs?></div>
</div>
</body></html>
