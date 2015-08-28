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
<div id="topNavContainer">
  <div id="header">
    <img src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/lori_header_logo.png'; ?>" />
  </div>  
         
</div>
<div id="button">
    <div id="menubox">
      <div id='cssmenu'>
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
          <li class='last'><?php print l(t('Where To Buy'), '/where-to-buy', array('attributes' => array('class' => 'buy'))); ?></li>
        </ul>
      </div>
    </div>    
  </div>
  <?php print $page; ?>
  <?php print $page_bottom; ?> 
  <div id="bottomFooterContainer" class="container"> 
    <div id="footer-bg">
       <div class="row">
        <div class="col-xs-4 col-xs-offset-4" id="copyright">©<?php echo date('Y'); ?> LORI&trade; by OG. ALL RIGHT RESERVED.
          <br /><a href="#" target="_blank">CONTACT US</a>-<a href="#" target="_blank">TERM OF USE</a>-<a href="#" target="_blank">PRIVACY POLICYSE</a>
        </div>    
      </div>    
    </div>    
  </div> 
</body>
</html>
