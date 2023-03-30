<?php

function array_insert(array $someNames, int $index, int $length, string $name)
{
    $someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];
    $allNames = array_splice($someNames, $index, 0, $name);
    return implode(', ', $someNames);
}

$someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];
echo array_insert($someNames, 3, 0, 'Phil');


//$allNames = array_insert($someNames, 'Phil', 4);

//echo '<pre>';
//print_r($allNames);
//echo '</pre>';
// ['Anna', 'Michael', 'Brent', 'Adam', 'Phil', 'Dom', 'Henry', 'James']