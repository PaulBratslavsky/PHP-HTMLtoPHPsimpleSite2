<?php 

function showSingleItemFunc($key, $value) { 
  ?> 
  
  <style>
  .catalog-card {
    margin: 1rem;

    display: flex;
    flex-direction: row;

    width: 150px;

    border: solid 5px #ffffff;
    border-radius: 5px;

  }

  .catalog-card-content-img {
    width: 100%;
  }

  .catalog-card-content-img img {
    display: block;
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  @media only screen and (max-width: 400px) {
      .catalog-card {
        width: 100%;
      }
  }

  </style>

  <?php

  $output = "<div class='catalog-card'> 
    <div class='catalog-card-content-img'>
      <a href=''><img src='{$value['img']}' alt='{$value['title']}'></a>
    </div>            
  </div>";

  return $output;

}

?>