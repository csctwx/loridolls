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
<div class="thumbPageContainer row fashion-dolls"> 
     <div class="grid js-masonry" data-masonry-options="{ &quot;columnWidth&quot;: 200, &quot;gutter&quot;: 10  }">
      	<?php foreach ($rows as $id => $row): ?>
	        <?php print $row; ?> 
	    <?php endforeach; ?>
    </div>
</div>

<script type="text/javascript">
	$(function(){
		// setTimeout(function(){
		// 	$('.grid-image-item').each(function(){
		// 		console.log($(this).css("top"));
		// 		if($(this).css("top") != "0px"){
		// 			$(this).css({
		// 		        'padding-top': 10
		// 		    });
		// 		}
				
		// 	}); 
		// }, 1000);
		

	});
</script>