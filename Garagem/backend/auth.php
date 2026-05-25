<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// PADRONIZAÇÃO GLOBAL DO USUÁRIO LOGADO
$user = $_SESSION['user'];

/*
$user = [
    'id'   => INT,
    'name' => STRING,
    'role' => admin | editor
];
*/
