<?php
include 'db.php';

$usuario = "Vitorio";
$saudacao = array("Bom dia?", "Boa tarde?", "Boa noite?");
$conteudo = "Olá " . $saudacao[array_rand($saudacao)];

$sql = "INSERT INTO posts (usuario, conteudo) VALUES (:usuario, :conteudo)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':conteudo', $conteudo);

if ($stmt->execute()) {
    echo "Novo post inserido com sucesso!";
} else {
    echo "Erro: " . $stmt->errorInfo()[2];
}
?>
