<?php

echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

// Now go http://localhost:1234/m3clientserver/testget.php?subject=PHP&web=W3schools.com

if (isset($_GET['subject']) and isset($_GET['web'])) { //testing keys 'subject' and 'web' exist in $_GET
    echo '<p>Yees</p>';
}