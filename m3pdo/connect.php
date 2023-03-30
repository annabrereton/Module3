<?php
//1. Connect to the database and save connection in a variable
$host = 'db';
$db = 'iofarm';
$user = 'root';
$password = 'password';
$charset = 'utf8mb4';
// dsn = data source name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// The 'new' below is creating a new PDO (PHP object) and saving it in variable $pdo. PDO's can contain diff data types
$pdo = new PDO($dsn, $user, $password);

// 2. Prepare statement

$query = $pdo->prepare('SELECT `name`, `id` FROM `pigs`');

// 3. Execute query
$query->execute();

// Now we can get the result

 $result = $query->fetchAll();
//$result = $query->fetch();

echo '<pre>';
print_r($result);
echo '</pre>';

