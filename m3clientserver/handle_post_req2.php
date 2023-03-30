<?php

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $name = $_POST['fname'];
//    $colour = $_POST['fcolour'];
//} if (isset($_POST['fname']) and ($_POST['fcolour'])) {
//    echo '<p>Hello, ' . $name . '. I see your favourite colour is ' . $colour . '.</p>';
//} else {
//    echo "Name is empty";
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $colour = $_POST['fcolour'];
} if (isset($_POST['fname']) and !isset($_POST['fcolour'])) {
    echo '<p>Hello, ' . $name . '. Tell me your favourite colour!</p>';
} elseif (isset($_POST['fcolour']) and !isset($_POST['fname'])) {
    echo '<p>What is your name? I see your favourite colour is ' . $colour . '.</p>';
} if (isset($_POST['fname']) and ($_POST['fcolour'])) {
            echo '<p>Hello, ' . $name . 'I see your favourite colour is ' . $colour . '.</p>';
} elseif (!isset($_POST['fname']) and !isset($_POST['fcolour'])) {
            echo '<p>What is your name? Tell me your favourite colour?</p>';
}


