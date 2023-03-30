<?php

$host = 'db';
$user = 'root';
$password = 'password';
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $exception) {
    throw new \PDOException(
        $exception->getMessage(),
        (int)$exception-getCode()
    );
}