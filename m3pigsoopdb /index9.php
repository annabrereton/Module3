<?php

// Testing code as writing, little by little
require_once 'PigDao.php';
require_once 'Pig.php';

$pigDao = new PigDao();

$pigs = $pigDao->fetchAll();

echo '<pre>';
print_r($pigs);
echo '</pre>';

$fred = $pigDao->fetch(2); // Testing for pig object primary key number 2 with function fetch() in Pig Dao

echo '<pre>';
print_r($fred);
echo '</pre>';


// This is to add a new pig object
$george = new Pig('George', 254, 'yellow'); // Define $george to add using pig constructor (from Pig.php)

$georgeId =$pigDao->add($george); // Adding $george. To find out which key db assigns, $georgeId is placeholder

$george->setId($georgeId);

echo '<pre>';
print_r($george);
echo '</pre>';
