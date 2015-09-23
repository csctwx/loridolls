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
<div class="thumbPageContainer row"> 
	<div class="thumbHeader">
	    <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-top.png'); ?>" />
	</div> 
	<div class="thumbMiddle">
		<div class="grid js-masonry" data-masonry-options="{ &quot;columnWidth&quot;: 200, &quot;gutter&quot;: 10  }">
	      	<?php foreach ($rows as $id => $row): ?>
		        <?php print $row; ?> 
		    <?php endforeach; ?>
	    </div>	
    </div> 
    <div class="thumbFooter">
    	<img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-bottom.png'); ?>" />
  	</div>
</div>