<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>



<div class="thumbPageContainer section"> 
	<div class="thumbHeader">
	    <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-top.png'); ?>" />
	</div>
	<div class="thumbMiddle">
		<div class="grid">
			<?php foreach ($rows as $id => $row): ?>
			      <div class="<?php print $classes_array[$id]; ?> item">
			        <div class="row row-centered">
			          <div><?php print $row; ?></div>
			        </div>
			      </div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="thumbFooter">
    	<img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-bottom.png'); ?>" />
  	</div>
</div>



  