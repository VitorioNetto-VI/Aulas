<?php
$host = "69.49.241.16";
$user = "gara4688_garagem";
$pass = "V1rtu@l777";
$dbname = "gara4688_garage";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}

