<?php
$servername = "69.49.241.16";
$username = "gara4688_round6";
$password = "Batatinhafrita123";
$dbname = "gara4688_facepost";


try {
    // Criar a instancia PDO para conectar ao banco de dados
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

    // Set PDO error modulo para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // mensagem de erro em caso de falha na conexão
    die("Conexão falhou: " . $e->getMessage());
}

/*
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
*/


?>