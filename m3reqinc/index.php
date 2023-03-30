<?php require_once "common_vars.php"; ?> // with libraries etc you want to use require_once and have the mat the top
<?php require_once "lib_functions.php"; ?> //php files probs use require_once and html require or include
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>require and include</title>

    <meta name="description" content="require include examples">
    <meta name="author" content="iO Academy">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

<!--     <script defer src="js/index.js"></script>-->
</head>

<body>

<?php include "header.php"; ?> //with no header file to link to include will show error and require would be fatal
<?php include "menu.php"; ?>

<h1>Demos of require and include</h1>

<p>Here you will find lots of useful information.</p>

<?php include "footer.php"; ?> // place html for footers, headers etc. in separate files and call them

</body>
</html>
