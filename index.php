<?php $pageTitle = 'Home | Welcome'; ?>
<?php $whichSection = 'home'; ?>

<?php include './_Components/header.php'; ?>


<?php showLandingPage(); ?>


<style>
  .show-random-container {
    padding: 2rem 1rem;
  }

  .show-random {
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;

  }

  .show-random-container h2 {
    text-align: center;
    color: #525252;
    text-transform: capitalize;
  }

  .show-random-container h2 span {
    border-bottom: solid 5px #CB3E46;
  }

  

  @media only screen and (max-width: 400px) {
      .catalog-card {
        width: 100%;
      }

      .show-random {
        flex-direction: column;
      }
  }

  
</style>


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