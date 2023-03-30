<?php

// Assume the password was put in a form and sent to us

$dbPassword = password_hash('banana', PASSWORD_DEFAULT);

//print_r( $dbPassword); // if want to see the resulting hash

// Store $dbPassword (the hash of the actual password) in a database, using a prepared statement

// Let';s get the password - pretend our user is logging in

// Get the hashed password from the database

//$correct = password_verify('apple', $dbPassword); // Wrong password
//
//var_dump($correct); // result is bool(false) $2y$10$MGlQqh8iRp/xvHQWXg4CgeCDkOMDOEXF2DodEQODoGzZ0f2fPmAy6bool(false)

$correct = password_verify('banana', $dbPassword);

var_dump($correct); // Will display 'bool(true)'