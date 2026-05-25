<?php
include 'db.php';
try {
    $sql = "SELECT id, usuario, conteudo, data_postagem FROM posts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row["id"] . " - Usuário: " . $row["usuario"] . "<br />" . 
                 "Conteúdo: " . $row["conteudo"] . " <br />" . 
                 "Data: " . $row["data_postagem"] . "<hr /> <br />";
        }
    } else {
        echo "0 resultados";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
$conn = null;
?>
