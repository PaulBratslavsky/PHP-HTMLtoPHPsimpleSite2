<?php 

function showNavFunc() { ?>

  <style>

    .padding15 {
      padding: 0 15px !important;
    }

    nav.main-nav {
      display: flex;
      justify-content: center;
      align-items: center;

      font-size: 2rem;
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
      padding: 0;
      margin: 0;
      width: 100%;
    }

    @media only screen and (max-width: 988px) {
      nav.main-nav ul { 
        justify-content: center;
      }
    }

    nav.main-nav ul > li {
      list-style: none;
      margin-right: 10px;
    }

    nav.main-nav ul li a {
      text-decoration: none;
    }

    nav.main-nav ul li a:hover,
    nav.main-nav ul li a:focus {
      color: white;
    }

  </style>


    <nav class="main-nav col-md-12">
      <div class="container padding15">
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