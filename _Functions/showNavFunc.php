<?php 

function showNavFunc() { ?>

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
      align-items: center;
      flex-wrap: wrap;
      width: 100%;
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
          <li><a href="./index.php">HOME</a></li>
          <li><a href="#">BOOKS</a></li>
          <li><a href="#">MOVIES</a></li>
          <li><a href="#">MUSIC</a></li>
          <li><a href="./suggest.php">SUGGEST</a></li>
        </ul>
      </div>  
    </nav>


 <?php }

?>