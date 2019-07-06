<?php $pageTitle = 'Catalog | View Our Library'; ?>
<?php include './_Components/header.php'; ?>

<style>
  div.catalog {
    min-height: 80vh;
    width: 100%;
    color:  #FFFAFA;

    padding-top: 3rem;
  }

  h1.catalog-title span{
    text-transform: capitalize;
    border-bottom: solid 5px #CB3E46;
  }

</style>

<div id="catalogBackgroundImage" class="catalog">
  <div class="container">
    <h1 class="catalog-title"><span id="catalogId"><?php echo $_GET['category']; ?></span></h1>

    <?php 

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
    }

    ?>
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
      catalogBackgroundImage.style.background = 'red';

  }

  

  
</script>

<?php include './_Components/footer.php'; ?>

