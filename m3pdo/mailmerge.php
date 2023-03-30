<?php
//1. Connect to the database and save connection in a variable

$db = 'mailmerge';
require_once 'pdoconnect.php';


// 2. Prepare statement

$query = $pdo->prepare('SELECT `name`, `email` FROM `users`');

// 3. Execute query
$query->execute();

// Now we can get the result

 $users = $query->fetchAll();
//
//echo '<pre>';
//print_r($result);
//echo '</pre>';
echo '<ul>';
foreach ($users as $user) {
    echo '<li>' . $user['name'] . " - " . $user['email'] . '</li>';
}
echo '</ul>';