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



  