<?php

$host = 'localhost';
$database = 'login_test';
$user = 'root';
$password = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "<script>alert('[ERRO] Falha ao se conectar com o banco de dados')</script>";
}
