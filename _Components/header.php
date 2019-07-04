<?php 
// IMPORT FUNCTIONS

// Say Hello Function
include './_Functions/sayHelloFunc.php'; 
include './_Functions/socialMenuFunc.php';
include './_Functions/showLogoFunc.php';
include './_Functions/showNavFunc.php';
include './_Functions/showLandingPage.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo 'Home | Welcome'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Style Sheet -->
<link href="css/style.css" rel="stylesheet">

<!--<link rel="shortcut icon" href="img/favicon.png">-->
</head>
<body>
<!-- =========================
     Pre-loader 
============================== -->

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div id="object"></div>
        </div>
    </div>
</div>

<!-- =========================
     Header Style  
============================== -->

<style>
header.main-header {
  background-image: url('./img/texture.jpg');
  padding: 1rem 0;
}
</style>



<!-- =========================
     Header  
============================== -->
<header class="main-header">
    <div class="container"> 
      <div class="row">
        <!-- Header -->
                  
          <?php showLogoFunc(); ?>
          <?php socialMenuFunc(); ?>
          <?php showNavFunc(); ?>
        
        <!-- Header Left -->

        

        <!-- /End Header --> 
      </div>
    </div>
</header>