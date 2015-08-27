<!-- InstanceBeginEditable name="mainContainer" -->
<div id="wrapper" >
    <div class="slider-wrapper theme-default slideshowWide">
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/homepage-slide1.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/homepage-slide2.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/homepage-slide3.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
        </div>
    </div>
    <div class="slider-wrapper theme-default slideshowNarrow">
        <div id="sliderTwo" class="nivoSlider">
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/iphone-crop-slideshow-african.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/iphone-crop-slideshow-fantasy.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/iphone-crop-slideshow-north-american.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
        </div>
    </div>
</div>

<div id="containerHomepage">
  <div style="width:70%; height:auto; margin:0 auto 2% auto; background:lime; padding:2%; display:none;">
      <div class="homepageMissionStatement">
          <img src="<?php echo myfunctionlib_theme_path('images/homepage-statement.png'); ?>">
      </div>
      <div class="homepageRandomNews">
        <img src="<?php echo myfunctionlib_theme_path('images/homepage-dinosaur-burst.png'); ?>" width="100%" />
    </div>
  </div>
<div class="homepageMissionStatementContainer">
    <div class="homepageMissionStatementTwo">
        <img src="<?php echo myfunctionlib_theme_path('images/homepage-statement.png'); ?>">
    </div>
    <div class="homepageRandomNewsTwo">
      <img src="<?php echo myfunctionlib_theme_path('images/homepage-dinosaur-burst-reversed-closeup.png'); ?>" width="90%" />
  </div>
</div>
<div id="crossSellingContainer">
    <div class="crossSellTitleRuler"></div>
    <div class="crossSellTitle">LET'S GO FOR A WALK!</div>
    <div class="crossSellTitleRuler"></div>
    <div class="crossSellingThumbContainer homepageCrossSellingThumbContainer"> 
      <?php if ($page['footer']): ?>         
          <?php print render($page['footer']); ?>          
      <?php endif; ?>
   </div>
</div>
</div>




 