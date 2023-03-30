<?php

require_once 'misclib.php';

$result = multiplyByTwo(0);

if ($result !=6) {
    echo 'Invalid operation';
}

$result = multiplyByTwo(3);

if ($result !=6) {
    echo 'Invalid operation';
}

try {
    $result = multiplyByTwo(-1);
    echo 'Invalid operation with argument -1';
} catch (InvalidArgumentException $exception) {
    echo 'Valid operation with argument -1';
}

try {
    $result = multiplyByTwo('hello');
    echo 'Invalid operation with argument "hello"';
} catch (TypeError $exception) {
    echo 'Valid operation with argument"hello"';
} catch (Error $exception) {
    echo 'Invalid operation with argument "hello"';
}