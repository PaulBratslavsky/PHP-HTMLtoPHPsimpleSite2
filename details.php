<?php include './_Components/header.php'; ?>

<!-- Details Page Container -->

<?php 

if ( isset($_GET['id']) ) {
  $id = $_GET['id']; 

  if ( isset($catalog[$id]) ) {
    $item = $catalog[$id];
  }

} 

if ( !isset($item) ) {
  header("location:catalog.php");
  exit;
}

?>

<?php 
  $pageTitle = $item['title']; 
  $section = null; 
?>

<div class="landing-page flex">

  <div class="container flex-main">

    <div class="flex1 box">

      <div class="verticle-line-left">
        <h1><?php echo $pageTitle; ?></h1>
        <h2><?php echo "{$item['category']} {$item['year']}";?></h2>
      </div>

      <?php 
        if ( strtolower($item['category']) == 'books') {
          $output .= "<ul style='font-size: 1.4rem; margin-top: 15px;' class='margin-left-21'>"; 

          foreach ( $item['authors'] as $author ) {
            $output .= '<li>' . $author . '</li>';
          }

          $output .= "</ul>";

          echo "<p class='white margin-left-21'>{$output}</p>";
        } 
      ?>

      <?php 
        if ( strtolower($item['category']) == 'music') {
          $output .= $item['artist'];
          echo "<p class='white margin-left-21'>{$output}</p>";
        } 
      ?>

<?php 
        if ( strtolower($item['category']) == 'movies') {
          $output .= "Directed by {$item['director']}";
          echo "<p class='white margin-left-21'>{$output}</p>";
        } 
      ?>

      <div class="category-tag margin-left-21"><?php echo $item['genre']; ?></div>


      <p class="margin-left-21">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh neque, convallis ut interdum a, consequat sit amet mauris. Vivamus sed tincidunt enim.</p>
      
      <div class="breadcrumbs margin-left-21">
        <a href="catalog.php" class="back-link">Full Catalog</a>
        &gt;
        <a href="catalog.php?cat=<?php echo $item['category']?>" class="back-link"><?php echo $item['category']?></a>
        &gt;
        <?php echo $item['title'];?>

      </div>
      
    </div>

    <div class="flex1 box">
      <div class="imageWrapper">
        <img  src="<?php echo $item['img'];?>" alt="<?php echo $pageTitle; ?>" />
      </div>
    </div>

  </div>

</div>



<div class="show-random-container"> 
  <div class="container">

  <h2><span>Show Suggested<span></h2>

  <div class="show-random">
    <?php $random = array_rand($catalog, 6); ?>
    <?php foreach ( $random as $id ) : ?>
      <?php echo showSingleItemFunc($id, $catalog[$id]); ?> 
    <?php endforeach; ?>
  </div>

  </div>
</div>

<?php include './_Components/footer.php'; ?>