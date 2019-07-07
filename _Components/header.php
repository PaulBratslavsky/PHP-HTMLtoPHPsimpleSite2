<?php   // IMPORT FUNCTIONS
        include './_Functions/sayHelloFunc.php'; 
        include './_Functions/showHeaderFunc.php';
        include './_Functions/socialMenuFunc.php';
        include './_Functions/showLogoFunc.php';
        include './_Functions/showNavFunc.php';
        include './_Functions/showLandingPage.php';
        include './_Functions/showSingleItemFunc.php';
        include './_Functions/showCategoryFunc.php';

        // IMPORT DATA
        include './_Data/data.php'; ?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom Style Sheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
  </head>


  <body>
    <?php showHeaderFunc() ?>
    <?php showNavFunc($whichSection); ?>


