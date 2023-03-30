<?php
//1. Connect to the database and save connection in a variable
$host = 'db';
$db = 'iofarm';
$user = 'root';
$password = 'password';
$charset = 'utf8mb4';

// dsn = data source name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Below is an array of constants the PDO has built in. The :: syntax is due to how they have been declared in PDO
$options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION   // this line is setting the error mode to non-silent
];

try {
// The 'new' below is creating a new PDO (PHP object) and saving it in variable $pdo. PDOs can contain diff data types
$pdo = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $exception) {
//    throw new \PDOException(       //this is 're-throwing errors' - useful for security as full error msg could give
//        $exception->getMessage(),  //away data that should be secure AND it stops the programme from running w/errors
//        (int)$exception-getCode()
//    );
    echo '<p>There was an error connecting to the db</p>';
    exit();
}

// 2. Prepare statement
$pigName = 'Sally';   //pretend this came from a form
$pigName = 'Sally\'; DROP TABLE `pigs`;';   //pretend this came from a form - it deleted table `pigs`

$query = $pdo->prepare("SELECT `name`, `id` FROM `pigs` WHERE `name` LIKE '$pigName'"
);

echo $query->queryString;

// 3. Execute query
$query->execute();

// Now we can get the result

 $result = $query->fetchAll();
//$result = $query->fetch();

echo '<pre>';
print_r($result);
echo '</pre>';

