<?php

require_once 'Pig.php';
require_once 'Sty.php';

// Create an object of the type Pig.
// Instantiate a Pig object. (create a new instance of Pig - in object-oriented speak)
$sally = new Pig();

// $sally is an instance of Pig.

//$sally->name = 'Sally';
$sally->setName('Sally');
$sally->weight = 280.5;
$sally->colour = 'yellow';

echo '<pre>';
print_r($sally);
echo '</pre>';


$fred = new Pig();

//$fred->name = 'Fred'; // Does the same  as line below but if property 'name' is made private in the class
$fred->setName('Fred'); // file, then setName() is needed to access it
$fred->weight = 310;
$fred->colour = 'brown';

echo '<pre>';
print_r($fred);
echo '</pre>';

// -> this is called the object operator or object accessor
// :: is called the class accessor or scope resolution operator

echo $fred->getName('Fred') . ' says ' . $fred->speak() . ' ' . $fred->speak();
echo '<br>';
echo $fred->eat('truffles');
echo '<br>';
echo "I'm a pig and my  scientific name is " . $fred->getScientificName();
echo '<br>';
echo $fred::OWNER; // with a constant you have to use :: rather than ->

echo '<br>';
echo '<br>';


// Objects composed of other objects is call COMPOSITION. Here we have PIG objects (Sally,
// Fred) within the STY object

$sty = new Sty(); // $sty is object of the Sty class

$sty->addPig($sally); // $sally is a Pig Object of the Pig class
$sty->addPig($fred);

echo '<pre>';
print_r($sty);
echo '</pre>';

echo '<pre>';
print_r($sty->getPig(1)); // Fred is at index 1
echo '</pre>';


// ADDING MULTIPLE NEW PIGS

$cuthbert = new Pig();
$cuthbert->setName('Cuthbert');
$cuthbert->setColour('black');
$cuthbert->setWeight(278.2);

$daisy = new Pig();
$daisy->setName('Daisy');
$daisy->setColour('pink');
$daisy->setWeight(299);

$spider = new Pig();
$spider->setName('Spider');
$spider->setColour('grey');
$spider->setWeight(259);

$sty->addPigz([$daisy, $cuthbert, $spider]);

echo '<pre>';
print_r($sty);
echo '</pre>';
