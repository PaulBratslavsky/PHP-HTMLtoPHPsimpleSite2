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
.padding15 {
  padding: 15px !important;
}

.flex-col-center {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

.flex-wrap {
  flex-wrap: wrap;
}
header.main-header {
  background: #414141;
  padding: 0;
  min-height: 60px;
}

div.main-menu {
  background: white;
}
</style>



<!-- =========================
     Header  
============================== -->
<header class="main-header">

    <div class="container padding15 flex-col-center">          
      <?php showLogoFunc(); ?>
      <?php socialMenuFunc(); ?>
    </div>

    <?php showNavFunc(); ?>
    
</header>

<!--   background-image: url('./img/texture.jpg'); -->