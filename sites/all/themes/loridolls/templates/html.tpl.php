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
      $('.dolls .field-content a').each(function(){
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
                    <li>
                      <a href="#">Ballerinas</a>
                    </li>
                    <li>
                      <a href="#">Pets &amp; Dolls</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#"><b>&lt;</b> Accessories</a>
                <div class="mp-level">
                  <h2 class="mp-back">back <b class="pull-right">&gt;</b></h2>
                  <ul>
                    <li>
                      <a href="#">Fashion Outfits</a>
                    </li>
                    <li>
                      <a href="#">Fashion Accessories</a>
                    </li>
                    <li>
                      <a href="#">Urban Living</a>
                    </li>
                    <li>
                      <a href="#">Weekend Gateway</a>
                    </li>
                  </ul>
                </div>
              </li>              
              <li><a href="#">Videos</a></li>
              <li><a href="#">Games &amp; Downloads</a></li>
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
