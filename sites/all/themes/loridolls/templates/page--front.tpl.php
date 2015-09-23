<!-- InstanceBeginEditable name="mainContainer" -->
<div id="wrapper" >
    <div class="slider-wrapper theme-default slideshowWide">
        <div id="slider" class="nivoSlider">
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/slide1.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/slide2.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/slide3.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="" /></a>
        </div>
    </div>
    <div class="slider-wrapper theme-default slideshowNarrow">
        <div id="sliderTwo" class="nivoSlider">
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/slide1.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/slide1.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/slide1.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/slide2.jpg'); ?>" alt="" /></a>
            <a href="#"><img src="<?php echo myfunctionlib_theme_path('images/slide1.jpg'); ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/slide3.jpg'); ?>" alt="" /></a>
        </div>
    </div>
</div>

<div id="containerHomepage" class="text-center">
  <div id="welcome">
    <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/lori-homepage-top-rev.png'); ?>" />
  </div>
  <div class="grid">
    <div id="fun-game">
      <h2>FUN & GAMES</h2>
      <h4>Wallpapers, coloring sheets, ...and fun galory!</h4>
      <div class="row">
          <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/homepage-fun_games-rev.png'); ?>" />
      </div>
      <div class="row">
          <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/flourish.png'); ?>" />
      </div>
    </div>
    <div id="go-for-walk">
      <h2>LET'S GO FOR A WALK!</h2>
      <h4>You can meet our pet parents</h4>
    </div>
    <div id="crossSellingContainer">
      <div class="crossSellingThumbContainer"> 
        <div class="thumbPageContainer row"> 
              <div class="item">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail" >  
                      <div class="field-content">
                        <img src="<?php echo myfunctionlib_theme_path('images/homepage-dog1.png'); ?>" width="166" height="166" alt="">
                      </div>
                      <div class="views-field views-field-title">        
                        <span class="field-content">Blaze
                        </span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail" >  
                      <div class="field-content">
                        <img src="<?php echo myfunctionlib_theme_path('images/homepage-dog2.png'); ?>" width="166" height="166" alt="">
                      </div>
                      <div class="views-field views-field-title">        
                        <span class="field-content">Happy
                        </span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail" >  
                      <div class="field-content">
                        <img src="<?php echo myfunctionlib_theme_path('images/homepage-dog3.png'); ?>" width="166" height="166" alt="">
                      </div>
                      <div class="views-field views-field-title">        
                        <span class="field-content">Indyana
                        </span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail" >  
                      <div class="field-content">
                        <img src="<?php echo myfunctionlib_theme_path('images/homepage-dog4.png'); ?>" width="166" height="166" alt="">
                      </div>
                      <div class="views-field views-field-title">        
                        <span class="field-content">Duke
                        </span>
                      </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/lori-homepage-bottom-rev.png'); ?>" />
  </div>
</div>
<!-- <div id="crossSellingContainer">
    <div class="crossSellTitleRuler"></div>
    <div class="crossSellTitle">LET'S GO FOR A WALK!</div>
    <div class="crossSellTitleRuler"></div>
    <div class="crossSellingThumbContainer homepageCrossSellingThumbContainer"> 
      <?php if ($page['footer']): ?>         
          <?php //print render($page['footer']); ?>          
      <?php endif; ?>
      <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
          <div class="carousel-inner">
            <div class="active item">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail">
                    <a href="http://www.battatco.com">
                        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/homepage-dog1.png'); ?>" alt="">
                        <div class="PStyleH ContentH TOrange">                    
                        </div>
                    </a>
                    <br>
                    <div class="homepageThumbName">
                       <h2>Blaze</h2>
                    </div>
                  </div>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail">
                    <a href="http://www.battatco.com">
                        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/homepage-dog2.png'); ?>" alt="">
                        <div class="PStyleH ContentH TOrange">                    
                        </div>
                    </a>
                    <br>
                    <div class="homepageThumbName">
                       <h2>Happy</h2>
                    </div>
                  </div>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail">
                    <a href="http://www.battatco.com">
                        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/homepage-dog3.png'); ?>" alt="">
                        <div class="PStyleH ContentH TOrange">                    
                        </div>
                    </a>
                    <br>
                    <div class="homepageThumbName">
                       <h2>Indyana</h2>
                    </div>
                  </div>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail">
                    <a href="http://www.battatco.com">
                        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/homepage-dog4.png'); ?>" alt="">
                        <div class="PStyleH ContentH TOrange">                    
                        </div>
                    </a>
                    <br>
                    <div class="homepageThumbName">
                       <h2>Duke</h2>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="<?php echo myfunctionlib_theme_path('images/arrow-left.png'); ?>"></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="<?php echo myfunctionlib_theme_path('images/arrow-right.png'); ?>"></a>
    </div>
   </div>
</div> -->
</div>




 