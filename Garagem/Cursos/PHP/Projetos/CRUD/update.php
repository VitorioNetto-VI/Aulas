<?php
include 'db.php';
try {
    $saudacao = array("Bom dia?", "Boa tarde?", "Boa noite?");
    $conteudo = "Oi " . $saudacao[array_rand($saudacao)];

    $sql = "UPDATE posts SET conteudo=:conteudo ORDER BY id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':conteudo', $conteudo);

    if ($stmt->execute()) {
        echo "Post atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar post.";
    }
} catch (PDOException $e) {
    echo "Erro ao atualizar post: " . $e->getMessage();
}
$conn = null;
?>
