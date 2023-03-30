<?php

session_start();

// Display the username variable stored in the session data by sessionpg1.php

//if (isset($_SESSION['username'])) {
//    echo '<p>Hello, ' . $_SESSION['username'] . '</p>';
//} else {
//     echo '<p>Welcome, stranger!</p>';
//}

//echo '<p>Hello, ' . $_SESSION['username'] . '</p>';
if (isset($_SESSION['username'])) {
    echo '<p>Hello, ' . $_SESSION['username'] . '</p>';
    echo '<a href="sessionpg3.php">'
        . '<button type="button">Log Out</button>' // Directs to next php file sessionpg3.php which ends the session
        . '</a>';
} else {
    echo '<p>Welcome, stranger!</p>';
    echo '<a href="sessionpg1.php">'
        . '<button type="button">Log In</button>' // Directs to next php file sessionpg3.php which ends the session
        . '</a>';
}
