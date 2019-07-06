<?php $pageTitle = 'Catalog | View Our Library'; ?>
<?php $whichSection = 'catalog'; ?>

<?php include './_Components/header.php'; ?>

<style>
  div.catalog {
    min-height: 80vh;
    width: 100%;
    color:  #FFFAFA;
    padding: 3rem 0;
  }

  h1.catalog-title span{
    text-transform: capitalize;
    border-bottom: solid 5px #CB3E46;
  }

  .full-catalog-view {
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;

  }

  @media only screen and (max-width: 400px) {
      
      h1.catalog-title {
        text-align: center;
      }
    }

</style>

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

<script>
  console.log('Hello from JS');
  
  let catalogId = document.getElementById('catalogId').innerHTML;
  console.log(catalogId);

  let catalogBackgroundImage = document.getElementById('catalogBackgroundImage');
  console.log(catalogBackgroundImage);

  switch ( catalogId ) {
    case 'books':
      catalogBackgroundImage.style.background = 'url("./img/books.jpg") no-repeat bottom center/cover';
      break;

      case 'movies':
      catalogBackgroundImage.style.background = 'url("./img/movies.jpg") no-repeat top center/cover';
      break;

      case 'music':
      catalogBackgroundImage.style.background = 'url("./img/music.jpg") no-repeat center center/cover';
      break;

    default:   
      catalogBackgroundImage.style.background = 'url("./img/fullcatalog.jpg") no-repeat center center/cover';

  }



  

  
</script>

<?php include './_Components/footer.php'; ?>

