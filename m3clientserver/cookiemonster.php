<?php

// Create a website that tells you how many times you have visited

// Here 'count' is a key we have named in the $_COOKIE array
// $_COOKIE is always there as is a superglobal
if (isset($_COOKIE['count'])) {  //$_COOKIE[count] array - isset tests if this exists(1st time no, therefore else exec.)
    $visits = $_COOKIE['count'] + 1;
} else {
    $visits = 1;
}

setcookie('count', $visits); // Here count is the name we give the cookie that you can see in the inspector
// This 'count' is then sent with the http response header. Now is associated with the 'count' in $_COOKIE
// array above when user visits and $visits if statement adds one. When the page is first visited the
// $_COOKIE['count'] is empty and executes the else statement $visits = 1

echo '<p>You have visited ' . $visits . ' times</p>';


//
//$_SESSION['username'] = 'fred1234';
//
//function VisitCounter()
//{
//    $visits = setcookie("counter");
//    count($visits);
//}
//$visits = VisitCounter();
//
//    foreach (VisitCounter()as $visit) {
//        ($visits() += 1);
//    }
//        echo '<p>This is your first time here.</p>';
//    } elseif
//        ($visits > 1) { $visits++;
//        echo '<p>You have been here ' . $visits . ' times.</p>';
//    }
//}

//    setCookie("counter", visits,expdate);