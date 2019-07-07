<?php $pageTitle = 'Catalog | View Our Library'; ?>
<?php $whichSection = 'catalog'; ?>

<?php include './_Components/header.php'; ?>

<div id="catalogBackgroundImage" class="catalog">
  <div class="container">
    <?php if ( !isset($_GET['category']) ) : ?>
      <h1 class="catalog-title"><span id="catalogId">View Full Catalog</span></h1>
        <div class="full-catalog-view">
        
        <?php foreach ( $catalog as $key => $value) : ?>
          <?php echo showSingleItemFunc($key, $value); ?>
        <?php endforeach; ?>

      </div>
    <?php else : ?> 
      <h1 class="catalog-title"><span id="catalogId"><?php echo $_GET['category']; ?></span></h1>
      <?php 
      // check if $_GET is set
      if ( isset($_GET['category']) ) {
        switch ( $_GET['category'] ) {
          case 'books': { 
      
            ?><div class="full-catalog-view">
        
              <?php foreach ( $catalog as $key => $value) : ?>

              <?php if ( $value['category'] == 'Books') : ?>
                <?php echo showSingleItemFunc($key, $value); ?>
              <?php endif; ?> 

              <?php endforeach; ?>

            </div><?php

            break;
          }
    
          case 'movies': {

            ?><div class="full-catalog-view">
        
              <?php foreach ( $catalog as $key => $value) : ?>
                <?php if ( $value['category'] == 'Movies') : ?>
                  <?php echo showSingleItemFunc($key, $value); ?>
                <?php endif; ?>  

              <?php endforeach; ?>

            </div><?php

            break;
          }
    
          case 'music': {

            ?><div class="full-catalog-view">
        
              <?php foreach ( $catalog as $key => $value) : ?>

              <?php if ( $value['category'] == 'Music') : ?>
                <?php echo showSingleItemFunc($key, $value); ?>
              <?php endif; ?> 

              <?php endforeach; ?>

            </div><?php

            break;
          }
    
          default: 
            echo "<h1>No page found with that category!</h1>";
            break;
        }

      }
      

      ?>

    <?php endif; ?>
    
  </div>

</div>

<?php include './_Components/footer.php'; ?>

