<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="INDEX, FOLLOW" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title><?php print $head_title; ?></title>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  
  <!-- InstanceEndEditable -->
  <!--script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!--script src="js/script.js"></script-->
  <?php print $scripts; ?>
  <?php print $styles; ?>
  <!-- bootstrap lib -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
  <script>
    $(function(){
      $('.carousel[data-type="multi"] .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<2;i++) {
              next=next.next();
              if (!next.length) {
                next = $(this).siblings(':first');
              }

              next.children(':first-child').clone().appendTo($(this));
            }
      });


      /* set equal height thumbnail images*/
      // $('.thumbnail').css({
      //     'height': $('.thumbnail').height() + $('.views-field-title').height() + 10
      // });

      // add class img-responsive to carousel thumbnail image
      $('.carousel[data-type="multi"] .item .thumbnail img').addClass('img-responsive');  

      //modify view dolls' link destination
      $('.section .field-content a').each(function(){
        var title = $(this).attr('href').replace(/content\//g,'').toLowerCase();
        // $(this).find('a').each(function(){
          console.log(title);
          $(this).attr('href', title);
        // });
      });  

    });
        
  </script>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]--> 
  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo myfunctionlib_theme_path('css/ie-only.css'); ?>" />
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print $page_top; ?>
<div class="container">
      <!-- Push Wrapper -->
      <div class="mp-pusher" id="mp-pusher">

        <!-- mp-menu -->
        <nav id="mp-menu" class="mp-menu">
          <div class="mp-level">
            <h2>Back <b class="pull-right">&gt;</b></h2>
            <ul>
              <li>
                <a href="#"><b>&lt;</b> Dolls</a>
                <div class="mp-level">
                  <h2 class="mp-back">back <b class="pull-right">&gt;</b></h2>
                  <ul>
                    <li><?php print l(t('Fashion Dolls'), '/fashion-dolls', array('attributes' => array('class' => 'fashion-dolls'))); ?></li>
                    <li><?php print l(t('Ballerinas'), '/ballerinas', array('attributes' => array('class' => 'ballerinas'))); ?></li>
                    <li><?php print l(t('Pets & Dolls'), '/pets-dolls', array('attributes' => array('class' => 'pets-dolls'))); ?></li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#"><b>&lt;</b> Accessories</a>
                <div class="mp-level">
                  <h2 class="mp-back">back <b class="pull-right">&gt;</b></h2>
                  <ul>
                    <li><?php print l(t('Fashion Outfits'), '/fashion-outfits', array('attributes' => array('class' => 'fashion-outfits'))); ?></li>
                    <li class='has-sub'><?php print l(t('Fashion Accessories'), '/fashion-accessories', array('attributes' => array('class' => 'fashion-accessories'))); ?></li>
                           <li class='has-sub'><?php print l(t('Urban Living'), '/urban-living', array('attributes' => array('class' => 'urban-living'))); ?></li>
                           <li class='has-sub'><?php print l(t('Weekend Getaway'), '/weekend-getaway', array('attributes' => array('class' => 'weekend-getaway'))); ?></li>
                  </ul>
                </div>
              </li>              
              <li><?php print l(t('Videos'), '/video-gallery', array('attributes' => array('class' => 'videos'))); ?>
              </li>
              <li><?php print l(t('Games & Downloads'), '/games-and-downloads', array('attributes' => array('class' => 'games-downloads'))); ?></li>
            </ul>
          </div>
        </nav>
        <!-- /mp-menu -->

        <div class="scroller"><!-- this is for emulating position fixed of the nav -->
          <div class="scroller-inner">
            <!-- Top Navigation -->            
            <div id="topNavContainer">
              <div id="header"> 
                           
                <div id='cssmenu'>  
                 <?php print l(t(' '), '/', array('attributes' => array('class' => 'home'))); ?>
                 <a href="#" id="trigger" class="menu-trigger">&nbsp;</a>              
                  <?php                     
                    $main_menu_tree = menu_tree_all_data('main-menu');
                    $main_menu_output = menu_tree_output($main_menu_tree);
                    print drupal_render($main_menu_output);                    
                  ?>
                    <!-- <ul>          
                      <li class='active has-sub'><?php print l(t('Dolls'), '/Dolls', array('attributes' => array('class' => 'dolls'))); ?>
                        <ul>
                           <li><?php print l(t('Fashion Dolls'), '/fashion-dolls', array('attributes' => array('class' => 'fashion-dolls'))); ?></li>
                           <li><?php print l(t('Ballerinas'), '/ballerinas', array('attributes' => array('class' => 'ballerinas'))); ?></li>
                           <li><?php print l(t('Pets & Dolls'), '/pets-dolls', array('attributes' => array('class' => 'pets-dolls'))); ?></li>
                        </ul>
                      </li>
                      <li class='has-sub'><?php print l(t('Accessories'), '/accessories', array('attributes' => array('class' => 'accessories'))); ?>
                        <ul>
                           <li><?php print l(t('Fashion Outfits'), '/fashion-outfits', array('attributes' => array('class' => 'fashion-outfits'))); ?></li>
                           <li class='has-sub'><?php print l(t('Fashion Accessories'), '/fashion-accessories', array('attributes' => array('class' => 'fashion-accessories'))); ?></li>
                           <li class='has-sub'><?php print l(t('Urban Living'), '/urban-living', array('attributes' => array('class' => 'urban-living'))); ?></li>
                           <li class='has-sub'><?php print l(t('Weekend Getaway'), '/weekend-getaway', array('attributes' => array('class' => 'weekend-getaway'))); ?></li>
                        </ul>
                      </li>
                      <li><?php print l(t('Videos'), '/video-gallery', array('attributes' => array('class' => 'videos'))); ?>
                      </li>
                      <li><?php print l(t('Games & Downloads'), '/games', array('attributes' => array('class' => 'games'))); ?></li>
                    </ul> -->
                  </div>
              </div>
            </div>
            <?php print $page; ?>
            <?php print $page_bottom; ?> 
            <div id="doll">
              <?php
                $foot_img_arr =  array('footer-redhead-doll.png',
                                      'footer-ballerina-doll.png',
                                      'footer-blonde-doll.png',
                                      'footer-purple-doll.png',
                                      'footer-turquoise-doll.png'
                                      );
                $foot_img = $foot_img_arr[rand(0,4)];

              ?> 
              <img src="<?php echo myfunctionlib_theme_path('images/'.$foot_img); ?>" alt="Foot Image" />
            </div>
            <div id="bottomFooterContainer" class="container">    
              <div id="footer-bg">
                 <!-- <div class="row">     -->   
                     <div id="copyright">
                        <div id="copyright-msg">
                          ©<?php echo date('Y'); ?> LORI&trade; by OG. ALL RIGHT RESERVED.
                        <br />
                        <?php print l(t('CONTACT US'), '/contact-us', array('attributes' => array('class' => 'contact-us'))); ?>
                        -<?php print l(t('WHERE TO BUY'), '/where-to-buy', array('attributes' => array('class' => 'where-to-buy'))); ?>
                        -<?php print l(t('FAQ'), '/faq', array('attributes' => array('class' => 'faq'))); ?>
                        <br /><?php print l(t('TERMS'), '/terms-and-conditions', array('attributes' => array('class' => 'terms-and-conditions'))); ?>
                        -<?php print l(t('PRIVACY POLICY'), '/privacy-policy', array('attributes' => array('class' => 'privacy-policy'))); ?>
                        </div>          
                    </div>        
                <!-- </div>     -->
              </div>    
            </div> 
          </div><!-- /scroller-inner -->
        </div><!-- /scroller -->

      </div><!-- /pusher -->
    </div><!-- /container -->



<script src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/js/classie.js'; ?>"></script>
  <script src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/js/mlpushmenu.js'; ?>"></script>
<script>
  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
    type : 'cover'
  } );
</script>
</body>
</html>
