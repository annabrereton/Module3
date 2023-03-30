<?php

$resources = 'w3schools.com, regex101.com, regularexpressions.info';

$pattern = '/\d{2,}/'; // looking for digits that are 2 or more {2,}
$matches = [];
$result = preg_match_all($pattern, $resources, $matches);

if($result) {
    echo '<p>Found ' . $result . ' matches</p>';
    echo '<pre>';
    print_r($matches);
    echo '</pre>';
} else {
    echo '<p>No matches</p>';
}

