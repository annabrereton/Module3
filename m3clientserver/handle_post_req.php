<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     //collect value of input field
    //should do an if (isset($_POST['fname'])) - if (empty....) is another way of checking but would allow a string with '0'
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo 'Hello, ' . $name;
    }
}
// Below does the same with if isset
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $name = $_POST['fname'];
//} if (isset($_POST['fname'])) {
//    echo 'Hello, ' . $name;
//} else {
//    echo "Name is empty";
//}