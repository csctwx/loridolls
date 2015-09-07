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

      //modify view figurines' link destination
      $('.view-figurines .thumbnail').each(function(){
        var title = $(this).find('.views-field-title a').text().replace(/\s/g,'-').toLowerCase();
        $(this).find('a').each(function(){
          console.log(title);
          $(this).attr('href', title);
        });
      });  

    });
        
  </script>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
            <h2 class="icon icon-world">All Categories</h2>
            <ul>
              <li class="icon icon-arrow-left">
                <a class="icon icon-display" href="#">Devices</a>
                <div class="mp-level">
                  <h2 class="icon icon-display">Devices</h2>
                  <a class="mp-back" href="#">back</a>
                  <ul>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-phone" href="#">Mobile Phones</a>
                      <div class="mp-level">
                        <h2>Mobile Phones</h2>
                        <a class="mp-back" href="#">back</a>
                        <ul>
                          <li><a href="#">Super Smart Phone</a></li>
                          <li><a href="#">Thin Magic Mobile</a></li>
                          <li><a href="#">Performance Crusher</a></li>
                          <li><a href="#">Futuristic Experience</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-tv" href="#">Televisions</a>
                      <div class="mp-level">
                        <h2>Televisions</h2>
                        <a class="mp-back" href="#">back</a>
                        <ul>
                          <li><a href="#">Flat Superscreen</a></li>
                          <li><a href="#">Gigantic LED</a></li>
                          <li><a href="#">Power Eater</a></li>
                          <li><a href="#">3D Experience</a></li>
                          <li><a href="#">Classic Comfort</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-camera" href="#">Cameras</a>
                      <div class="mp-level">
                        <h2>Cameras</h2>
                        <a class="mp-back" href="#">back</a>
                        <ul>
                          <li><a href="#">Smart Shot</a></li>
                          <li><a href="#">Power Shooter</a></li>
                          <li><a href="#">Easy Photo Maker</a></li>
                          <li><a href="#">Super Pixel</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="icon icon-arrow-left">
                <a class="icon icon-news" href="#">Magazines</a>
                <div class="mp-level">
                  <h2 class="icon icon-news">Magazines</h2>
                  <a class="mp-back" href="#">back</a>
                  <ul>
                    <li><a href="#">National Geographic</a></li>
                    <li><a href="#">Scientific American</a></li>
                    <li><a href="#">The Spectator</a></li>
                    <li><a href="#">The Rambler</a></li>
                    <li><a href="#">Physics World</a></li>
                    <li><a href="#">The New Scientist</a></li>
                  </ul>
                </div>
              </li>
              <li class="icon icon-arrow-left">
                <a class="icon icon-shop" href="#">Store</a>
                <div class="mp-level">
                  <h2 class="icon icon-shop">Store</h2>
                  <a class="mp-back" href="#">back</a>
                  <ul>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-t-shirt" href="#">Clothes</a>
                      <div class="mp-level">
                        <h2 class="icon icon-t-shirt">Clothes</h2>
                        <a class="mp-back" href="#">back</a>
                        <ul>
                          <li class="icon icon-arrow-left">
                            <a class="icon icon-female" href="#">Women's Clothing</a>
                            <div class="mp-level">
                              <h2 class="icon icon-female">Women's Clothing</h2>
                              <a class="mp-back" href="#">back</a>
                              <ul>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Sale</a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="icon icon-arrow-left">
                            <a class="icon icon-male" href="#">Men's Clothing</a>
                            <div class="mp-level">
                              <h2 class="icon icon-male">Men's Clothing</h2>
                              <a class="mp-back" href="#">back</a>
                              <ul>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Sale</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a class="icon icon-diamond" href="#">Jewelry</a>
                    </li>
                    <li>
                      <a class="icon icon-music" href="#">Music</a>
                    </li>
                    <li>
                      <a class="icon icon-food" href="#">Grocery</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="icon icon-photo" href="#">Collections</a></li>
              <li><a class="icon icon-wallet" href="#">Credits</a></li>
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
                 <a href="#" id="trigger" class="menu-trigger">&nbsp;</a>              
                  <?php 
                    // $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                    // print drupal_render($main_menu_tree);
                  ?>
                    <ul>          
                      <li class='active has-sub'><?php print l(t('Dolls'), '/Dolls', array('attributes' => array('class' => 'dolls'))); ?>
                        <ul>
                           <li><?php print l(t('Fashion Dolls'), '/fashion-dolls', array('attributes' => array('class' => 'fashion-dolls'))); ?></li>
                           <li><?php print l(t('Ballerinas'), '/fantasy-sets', array('attributes' => array('class' => 'fantasy'))); ?></li>
                           <li><?php print l(t('Pets & Dolls'), '/north-american-animals', array('attributes' => array('class' => 'american'))); ?></li>
                        </ul>
                      </li>
                      <li class='has-sub'><?php print l(t('Accessories'), '/accessories', array('attributes' => array('class' => 'accessories'))); ?>
                        <ul>
                           <li><?php print l(t('Fashion Outfits'), '/fashion-outfits', array('attributes' => array('class' => 'dinosaurs'))); ?></li>
                           <li class='has-sub'><?php print l(t('Fashion Accessories'), '/fantasy-sets', array('attributes' => array('class' => 'fantasy'))); ?></li>
                           <li class='has-sub'><?php print l(t('Urban Living'), '/north-american-animals', array('attributes' => array('class' => 'american'))); ?></li>
                           <li class='has-sub'><?php print l(t('Weekend Gateway'), '/wild-animals', array('attributes' => array('class' => 'wild'))); ?></li>
                        </ul>
                      </li>
                      <li><?php print l(t('Videos'), '/categories', array('attributes' => array('class' => 'figurines'))); ?>
                      </li>
                      <li><?php print l(t('Games & Downloads'), '/games', array('attributes' => array('class' => 'accessories'))); ?></li>
                    </ul>
                  </div>
              </div>
            </div>
            <?php print $page; ?>
            <?php print $page_bottom; ?> 
            <div id="doll"></div>
            <div id="bottomFooterContainer" class="container">    
              <div id="footer-bg">
                 <div class="row">       
                     <div class="col-xs-4 col-xs-offset-4" id="copyright">
                      <div id="copyright-msg">
                        ©<?php echo date('Y'); ?> LORI&trade; by OG. ALL RIGHT RESERVED.
                      <br /><a href="#" target="_blank">CONTACT US</a>-<a href="#" target="_blank">WHERE TO BUY</a>-<a href="#" target="_blank">FAQs</a>
                      <br /><a href="#" target="_blank">TERMS OF USE</a>-<a href="#" target="_blank">PRIVACY POLICY</a>
                      </div>          
                    </div>        
                </div>    
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
