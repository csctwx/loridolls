<!-- InstanceBeginEditable name="mainContainer" -->
<?php $views_page = views_get_page_view(); ?>
<div id="container">
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>    
  </div>
  <?php if (is_object($views_page)): ?>
    <div id="productTitleDetailPage">
    <h2><?php echo $title; ?></h2>
    </div>    
  <?php endif; ?>
  <?php if (is_object($views_page)): ?>
    <div id="categoryPicture">
      <!-- <img class="img-responsive img-center" src="<?php //echo myfunctionlib_get_cat_picture($title); ?>" alt="cat_picture" /> -->
      <img class="img-responsive img-center" src="<?php print base_path() . drupal_get_path('theme', 'loridolls') . '/images/doll-section-vignette.jpg'; ?>"  data-thumb="<?php echo myfunctionlib_theme_path('images/up.jpg'); ?>" alt="cat_picture" />
    </div>
  <?php endif; ?>
  
  <?php print render($page['content']); ?>
  
</div>
<!-- InstanceEndEditable -->
<?php if ($page['sidebar_first']): ?>
  <aside id="secondary" class="sidebar-container" role="complementary">
     <?php print render($page['sidebar_first']); ?>
  </aside> 
<?php endif; ?>  
