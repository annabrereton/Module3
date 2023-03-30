<?php
// Dao standing for DATA ACCESS OBJECT
// This accesses data from the pigs database to use to connect to Pig.php
require_once 'PigDao.php';

$pigDao = new PigDao(); // Testing class, connecting to db. Could print-r here

$pigs = $pigDao->fetchAll(); // After print_r shows the above connection works
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All the Pigs</title>

    <meta name="description" content="A collection of pigs at iO Farm">
    <meta name="author" content="iO Academy">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- <script defer src="js/index.js"></script> -->
</head>

<body>

<h1>The Pigs!</h1>

<section class="collection">

    <?php // PHP to loop through array of pigs and put each pig in its own <div>
    $html = '';
    foreach ($pigs as $pig) {
        $html .= '<div class="pig-card">'
            . '<p>Name: ' . $pig->getName() . '</p>'
            . '<p>Weight: ' . $pig->getWeight() . '</p>'
            . '<p>Colour: ' . $pig->getColour() . '</p>'
            . '</div>';
    }
    echo $html;  // Echo out pig >div>s
    ?>

</section>

</body>
</html>
