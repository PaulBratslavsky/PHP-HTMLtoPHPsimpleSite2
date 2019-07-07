<?php 
function showNavFunc($section) { ?>
  <nav class="main-nav">
    <div class="container">
      <ul>
        <li class="<?php if ($section == "home") { echo 'on'; } ?>"> <a href="index.php">HOME</a></li>
        <li class="<?php if ($section == "catalog") { echo 'on'; } ?>"><a href="catalog.php">CATALOG</a></li>
        <li class="<?php if ($_GET['category'] == "books") { echo 'on'; } ?>"><a href="catalog.php?category=books">BOOKS</a></li>
        <li class="<?php if ($_GET['category'] == "movies") { echo 'on'; } ?>"><a href="catalog.php?category=movies">MOVIES</a></li>
        <li class="<?php if ($_GET['category'] == "music") { echo 'on'; } ?>"><a href="catalog.php?category=music">MUSIC</a></li>
        <li class="<?php if ($section == "suggest") { echo 'on'; } ?>"><a href="suggest.php">SUGGEST</a></li>
      </ul>
    </div>  
  </nav>
 <?php }

?>