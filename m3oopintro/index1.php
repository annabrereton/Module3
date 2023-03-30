<?php

require_once 'Cow.php';

// In PHP a MAGIC METHOD is something that is automatically called, i.e. when you type 'new',
// PHP automatically calls __construct

// Now we can add new Cow objects in a single line, using a 'constructor' (function __construct in Cow.php)
$ermintrude = new Cow('Ermintrude', 1200, 'black and white');
//$ermintrude->setName('Ermintrude');
//$ermintrude->setWeight(1200);
//$ermintrude->setColour('black and white');

echo '<pre>';
print_r($ermintrude);
echo '<pre>';

echo $ermintrude;