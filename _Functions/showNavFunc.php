<?php 
function showNavFunc($section) { ?>

  <style>
    nav.main-nav {
      font-size: 1.2rem;
      font-weight: bold;
      padding: 10px;
      background: #525252;

    }

    nav.main-nav ul {
      display: flex;
      flex-direction: row;
      justify-content: flex-end;
      flex-wrap: wrap;
      width: 100%;
    }

    .on { 
      border-bottom: #ca3e47 5px solid;
    }

    @media only screen and (max-width: 988px) {
      nav.main-nav ul { 
        justify-content: center;
      }
    }

    nav.main-nav ul > li {
      margin: 0 0.5rem;
    }

    nav.main-nav ul li a {
      color: #cecece;
    }

    nav.main-nav ul li a:hover,
    nav.main-nav ul li a:focus {
      color: #ca3e47;
    }

  </style>


    <nav class="main-nav">
      <div class="container">
        <ul>
          <li class="<?php if ($section == "home") { echo 'on'; } ?>"> <a href="./index.php">HOME</a></li>
          <li class="<?php if ($section == "catalog") { echo 'on'; } ?>"><a href="http://localhost:8888/StaticHTMLtoPHP/catalog.php">CATALOG</a></li>
          <li class="<?php if ($_GET['category'] == "books") { echo 'on'; } ?>"><a href="http://localhost:8888/StaticHTMLtoPHP/catalog.php?category=books">BOOKS</a></li>
          <li class="<?php if ($_GET['category'] == "movies") { echo 'on'; } ?>"><a href="http://localhost:8888/StaticHTMLtoPHP/catalog.php?category=movies">MOVIES</a></li>
          <li class="<?php if ($_GET['category'] == "music") { echo 'on'; } ?>"><a href="http://localhost:8888/StaticHTMLtoPHP/catalog.php?category=music">MUSIC</a></li>
          <li class="<?php if ($section == "suggest") { echo 'on'; } ?>"><a href="./suggest.php">SUGGEST</a></li>
        </ul>
      </div>  
    </nav>


 <?php }

?>