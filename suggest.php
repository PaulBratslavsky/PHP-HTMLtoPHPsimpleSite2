<?php $pageTitle = 'suggest'; ?>
<?php $whichSection = 'suggest'; ?>

<?php include './_Components/header.php'; ?>
  <?php showLandingPage(); ?>

  <div class="show-random-container"> 
  <div class="container">

  <h2><span>Show Suggested<span></h2>

  <div class="show-random">
    <?php $random = array_rand($catalog, 4); ?>
    <?php foreach ( $random as $id ) : ?>
      <?php echo showSingleItemFunc($id, $catalog[$id]); ?> 
    <?php endforeach; ?>
  </div>

  </div>
</div>

<?php include './_Components/footer.php'; ?>