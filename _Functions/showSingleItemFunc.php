<?php 

function showSingleItemFunc($key, $value) {

  $output = "<div class='catalog-card'> 
    <div class='catalog-card-content-img'>
      <a href='http://localhost:8888/StaticHTMLtoPHP/details.php?id={$key}'><img src='{$value['img']}' alt='{$value['title']}'></a>
    </div>            
  </div>";

  return $output;

}

?>