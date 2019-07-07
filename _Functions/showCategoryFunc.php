<?php 

function showCategoryFunc($catalog, $categoryName) { ?>

  <div class="full-catalog-view">
    <?php foreach ( $catalog as $key => $value) : ?>

      <?php if ( strtolower($value['category']) == strtolower($categoryName) ) : ?>
        <?php echo showSingleItemFunc($key, $value); ?>
      <?php endif; ?> 

    <?php endforeach; ?>
  </div>

<?php }

?>