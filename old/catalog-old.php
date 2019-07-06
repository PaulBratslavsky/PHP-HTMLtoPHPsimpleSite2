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
    margin-left: 0.5rem;
  }

  .full-catalog-view {
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

  }

  .catalog-card {
    flex-grow: 1;
    background: rgb(253, 251, 251, 0.95);
    color: #525252;
    margin: 0.5rem;

    border-bottom-right-radius: 15px; 
    border-bottom-left-radius: 15px; 

  }

  .catalog-card-header {
    min-height: 60px;

    padding: 1rem;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color: #fff;
    background: #CB3E46;
  }

  .catalog-card-content {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .catalog-card-content-img {
    flex-grow: 1;
    flex: 1;
    flex-wrap: wrap;
    min-width: 250px;
  }

  .catalog-card-content-img img {
    display: block;
    max-height: 400px;
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .catalog-card-content-text {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-width: 250px;


    flex-grow: 1;
    flex: 2;
    padding: 1rem;
  }

  button.view-detail {
      margin-top: 15px;
      background: #CB3E46;
      color: #FFFAFA;
      border: none;
      font-size: 1.4rem;
      padding: 0.25rem 0.75rem;
      border-radius: 5px;

      float: right;
    }

    button.view-detail:hover,
    button.view-detail:focus {
      color: #FFFAFA;
      background: #525252;
      cursor: pointer;
    }

</style>

<div id="catalogBackgroundImage" class="catalog">
  <div class="container">

    <?php if ( !isset($_GET['category']) ) : ?>
      
      <h1 class="catalog-title"><span id="catalogId">View Full Catalog</span></h1>

      <div class="full-catalog-view">

        
        <?php foreach ( $catalog as $key => $value) : ?>

          <div class="catalog-card"> 
            <header class="catalog-card-header">
              <h3><?php echo $value['title']?></h3>
            </header>

            <div class="catalog-card-content">
      

              <div class="catalog-card-content-img">
                <img src="<?php echo $value['img']?>" alt="<?php echo $value['title']?>">
              </div>

              <div class="catalog-card-content-text">
                
                <div>
                  <h3>Hello</h3>
                  <p>Some text</p>
                </div>

                <div>
                  <button class="view-detail">Read More</button>
                </div>
              </div>

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
            break;
          }
    
          case 'movies': {
            break;
          }
    
          case 'music': {
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

