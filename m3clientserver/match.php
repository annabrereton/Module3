<?php

$string = 'Hello, World!';
$result = preg_match('/World/', $string);

echo '<p>$result is ' . $result . '</p>';

$resources = 'w3schools.com, regex101.com, regularexpressions.info';

if (preg_match('/\d/', $resources)) {
    echo '<p>The resources list contains digits.</p>';
} else {
    echo '<p>The resources list does NOT contain digits</p>';
}

if (preg_match('/o{2,}/', $resources)) {
    echo '<p>The resources list contains repeated "o"s.</p>';
} else {
    echo '<p>The resources list does NOT contain repeated "o"s.</p>';
}

$email = 'TheNeedyGamer@gmail.com';

if (preg_match('/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/', $email)) {
    echo '<p>This is a valid email.</p>';
} else {
    echo '<p>This is NOT a valid email.</p>';
}

$html_tag = '<h1>Here is a heading</h1>';

if (preg_match('/<[a-z0-9]+[>][a-zA-Z0-9\/\.\$\%\£\!@\ ]+<\/[a-z0-9]+>/', $html_tag)) {
    echo '<p>This is a valid html tag.</p>';
} else {
    echo '<p>This is NOT a valid html tag.</p>';
}

