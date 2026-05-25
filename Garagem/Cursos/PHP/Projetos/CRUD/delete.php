<?php
include 'db.php';

try {
    $sql = "DELETE FROM posts ORDER BY id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Último registro excluído com sucesso!";
    } else {
        echo "Nenhum registro encontrado para excluir.";
    }
} catch (PDOException $e) {
    echo "Erro ao deletar post: " . $e->getMessage();
}

$conn = null;
?>
