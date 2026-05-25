<?php require '../config.php'; require '../auth.php';
$pdo->query("DELETE FROM users WHERE id=".$_GET['id']);
header("Location: index.php");
?>