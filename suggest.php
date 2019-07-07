<?php $pageTitle = 'suggest'; ?>
<?php $whichSection = 'suggest'; ?>

<?php include './_Components/header.php'; ?>
  
<div class="suggest-page flex">

<div class="container flex-main">

  <div class="flex-col flex1 box gray-background">

    <div class="verticle-line-left">
      <h1>Suggest A Media Item</h1>
    </div>

    <p class="margin-left-21">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh neque, convallis ut interdum a, consequat sit amet mauris. Vivamus sed tincidunt enim.</p>    
    
  </div>
  

  <div class="flex-col flex1 box gray-background">
    <div class="formWrapper">
      <form method="POST">
        
          <div class="name-group">
            <label for="name" >Name:</label>
            <input type="text" id="name" name="name"/>
          </div>

          <div class="name-group">
            <label for="email" >Email:</label>
              <input type="email" id="email" name="email"/>
          </div>

          <div class="name-group">
            <label for="details" >Enter Your Suggestion:</label>
            <textarea id="details" name="details"></textarea>
          </div>

        <input class="submit" type="submit" value="Send Suggestion" />
        
      </form>
    </div>
  </div>

</div>

</div>


  <div class="white-bg show-random-container"> 
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