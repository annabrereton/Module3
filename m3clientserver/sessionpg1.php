<?php

session_start();

// session_start() first checks if a session is already started
// and if not then it starts one

// We need session start() before we can access $_SESSION

// It must be the very first thing in your script. Even before any HTML tags

$_SESSION['username'] = 'fred1234'; // create a new session variable
//$_SESSION is a superglobal array

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<a href="sessionpg2.php">'
    . '<button type="button">Next Page</button>'
    . '</a>';