<?php 

// IMPORT FUNCTIONS
include './_Functions/sayHelloFunc.php'; 
include './_Functions/showHeaderFunc.php';
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

  <!-- Custom Style Sheet -->
  <link href="css/mystyle.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<style>
/*******************************
    General Style  
*******************************/

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
body {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
a {
  text-decoration: none;
}

li {
  list-style: none;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1rem;
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

</style>


<body>
<!-- =========================
      Header  
============================== -->
<?php showHeaderFunc() ?>
<?php showNavFunc(); ?>


