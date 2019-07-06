<?php 

function showHeaderFunc() {?>
  <style>
  /*******************************
    Header Style  
  *******************************/

  header.main-header {
    background: #414141;
    padding: 1rem 0;
    min-height: 60px;
  }
</style>

  <header class="main-header">

    <div class="container flex-col-center flex-wrap">   

      <?php showLogoFunc(); ?>
      <?php socialMenuFunc(); ?>

    </div>

  </header>
<?php }

?>