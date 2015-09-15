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
	        	<!-- <img src="http://i.imgur.com/bwy74ok.jpg"> -->
	    <?php endforeach; ?>
      <!-- <div class="grid-item grid-item--width2 grid-item--height2"></div>
      <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item grid-item--width2"></div>
      <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item grid-item--width2 grid-item--height2"></div>
      <div class="grid-item"></div>
      <div class="grid-item"></div> -->
    </div>
</div>


      <!-- <div class="<?php //print $classes_array[$id]; ?> item"> -->
      	<!-- <div class="grid grid--images" data-js-module="imagesloaded-progress">
	      <div class="grid-sizer"></div>
	      <?php //foreach ($rows as $id => $row): ?>
	      <div class="grid-image-item">
	        <?php //print $row; ?> -->
	        <!-- <img src="http://i.imgur.com/bwy74ok.jpg"> -->
	      <!-- </div>
	      <?php //endforeach; ?> -->
	      <!-- <div class="grid-image-item">
	        <img src="http://i.imgur.com/bAZWoqx.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/PgmEBSB.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/aboaFoB.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/LkmcILl.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/q9zO6tw.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/r8p3Xgq.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/hODreXI.jpg">
	      </div>
	      <div class="grid-image-item">
	        <img src="http://i.imgur.com/UORFJ3w.jpg">
	      </div> -->
	    <!-- </div> -->
        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail"></div>
        </div> -->
     <!--  </div> -->
  
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