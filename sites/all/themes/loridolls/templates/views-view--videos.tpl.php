<?php
/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>  
  <?php if ($title): ?>    
    <?php print $title; ?>    
  <?php endif; ?>  
  <div class="view">
   <div class="view-content videos">      
      <div class="thumbPageContainer section"> 
      <div class="thumbHeader">
          <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-top.png'); ?>" />
      </div>
      <div class="thumbMiddle">
          We will share Lori™ videos with you very soon!<br />
          Please come back to learn more about all your friends ;)
          <br /><br /><br /><br /><br />
         <?php if ($rows): ?>
            <!-- A wrapper DIV to display the Gallery -->
               
                <!-- <div style="display:none;margin:0 auto;" class="html5gallery" data-skin="mediapage" data-width="800" data-height="450" data-resizemode="fill" >
                
                  <?php //print $rows; ?>
                 
                </div>       -->
              
          <?php endif; ?>  
          <?php if ($pager): ?>
            <?php print $pager; ?>
          <?php endif; ?>
      </div>
      <div class="thumbFooter">
          <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-bottom.png'); ?>" />
      </div>
    </div>

    </div>
  </div>
  <script>
    jQuery(function(){
      // var set_height = function(){
      //   //var car_length = jQuery('div.html5gallery-tn-0').height();
      //   // var count = $('.html5gallery-tn-0').length;
        
      // };
      // setTimeout(set_height, 1000);
      
      var count = jQuery('.html5gallery > a').length;
      var rows = Math.ceil(count/3);
      var car_height = rows * 180;
      var base_height = 740;
      var current_height = base_height + car_height;

      jQuery('div.html5gallery').css('height',900);
      // jQuery('div.html5gallery-container-0').css('height',800);
      
      // jQuery('div.html5gallery').css('min-height',current_height);
      // jQuery('div.html5gallery').css('max-height',current_height);
      // jQuery('div.html5gallery-container-0').css('min-height',current_height);
      // jQuery('div.html5gallery-container-0').css('max-height',current_height);
    });
  </script>
  