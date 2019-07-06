<?php $pageTitle = 'Catalog | View Our Library'; ?>
<?php $whichSection = 'catalog'; ?>

<?php include './_Components/header.php'; ?>
<?php include './_Data/data.php'; ?>

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

          <div class="catalog-card"> 
            <div class="catalog-card-content-img">
              <a href=""><img src="<?php echo $value['img']?>" alt="<?php echo $value['title']?>"></a>
            </div>            
          </div>

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
                  <div class="catalog-card"> 
                    <div class="catalog-card-content-img">
                      <a href=""><img src="<?php echo $value['img']?>" alt="<?php echo $value['title']?>"></a>
                    </div>            
                  </div>
                <?php endif; ?> 

              <?php endforeach; ?>

            </div><?php

            break;
          }
    
          case 'movies': {

            ?><div class="full-catalog-view">
        
              <?php foreach ( $catalog as $key => $value) : ?>
                <?php if ( $value['category'] == 'Movies') : ?>
                  <div class="catalog-card"> 
                    <div class="catalog-card-content-img">
                      <a href=""><img src="<?php echo $value['img']?>" alt="<?php echo $value['title']?>"></a>
                    </div>            
                  </div>
                <?php endif; ?>  

              <?php endforeach; ?>

            </div><?php

            break;
          }
    
          case 'music': {

            ?><div class="full-catalog-view">
        
              <?php foreach ( $catalog as $key => $value) : ?>

              <?php if ( $value['category'] == 'Music') : ?>
                  <div class="catalog-card"> 
                    <div class="catalog-card-content-img">
                      <a href=""><img src="<?php echo $value['img']?>" alt="<?php echo $value['title']?>"></a>
                    </div>            
                  </div>
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
      catalogBackgroundImage.style.background = 'url("./img/books.jpg") no-repeat center bottom';
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

