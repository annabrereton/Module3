<?php

session_start(); //Expire the session cookie

setcookie('PHPSESSID', '', time()-3600);

//echo '<pre>';
//echo 'PHPSESSID: ' . $_COOKIE['PHPSESSID'];
//echo '</pre>';  // Wouldn't usually display this

// Remove all session variables from $_session

session_unset();

// Remove any other data related to the session, i.e.
//

session_destroy();

//echo '<p>You are now logged out</p>';

// If we didn't echo the above PHPSESSID, we could
// echo the above msg or redirect to another page

header('Location: sessionover.php');