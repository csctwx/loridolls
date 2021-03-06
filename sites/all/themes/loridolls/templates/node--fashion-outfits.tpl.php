<?php   
  //Create field variables 
  $fields = myfunctionlib_get_fields($content);  
  
  $other_products = myfunctionlib_get_other_products($type, $node->nid);                  
  // kpr($fields); die();
?>

<div id="containerProductPage">
  <div class="row" id="productHeader">
    <div class="col-sm-6 col-xs-12 vcenter">
      <img class="img-responsive" src="<?php echo $fields['product_main_picture']['url'][0]['picture_url']; ?>" alt="Main Picture"/>
    </div><!-- 
 --><div class="col-sm-6 col-xs-12 vcenter">
      <div id="productTitle">
        <h2><?php echo $title; ?></h2>
      </div>
      <div id="includes">
        <b>includes:</b>
        <br />
        <?php echo $fields['contents']['value']; ?>
      </div>
      <br /> 
      <?php if(!empty($fields['features']['value'])||!empty($fields['instructions_sheet']['value'])): ?>
      <div id="features">
        <b>features:</b>
        <ul>
        <?php foreach ($fields['features']['value'] as $feature) : ?>
          <li><?php echo $feature['value']; ?></li>
        <?php endforeach; ?>  
        <?php if(!empty($fields['instructions_sheet']['value'])): ?>
          <li><a href="<?php echo $fields['instructions_sheet']['url'][0]['picture_url']; ?>" target="_blank">Download instructions sheet</a></li>
        <?php endif; ?>
        </ul>
      </div>
      <?php endif; ?>
      <br />
      <div id="flourish"><img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/flourish.png'); ?>" /></div>
      <div id="store-link">
        <h3>Where to Buy</h3>
        <?php foreach ($fields['store_link']['value'] as $item): ?>
            <?php $store_link = field_collection_field_get_entity($item); ?> 
            <a href="<?php echo $store_link->field_store_link_url['und']['0']['value'] ?>" target="_blank">
            <?php //echo $store_link->field_store_link_name['und']['0']['value'] ?>
            <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/target.png'); ?>" />
            </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>  
  <div class="row" id="productDetail">
    <div class="col-xs-12">
      <div class="slider-wrapper theme-default slideshowWide">
          <div id="slider" class="nivoSlider">
              <?php foreach ($fields['product_detail_picture']['url'] as $detail_picture): ?>
                 <img class="img-responsive" src="<?php echo $detail_picture['picture_url'];  ?>" />
              <?php endforeach; ?>   
          </div>
      </div>
    </div>
  </div>   
</div>
<div id="crossSellingContainer">
  <?php if(!empty($other_products)): ?>
    <div class="crossSellTitle"><h3>More fun accessories</h3></div>
    <div class="crossSellingThumbContainer"> 
      <div class="thumbPageContainer row"> 
        <?php if(isset($other_products)): ?>
          <?php foreach ($other_products as $index => $product):?>  
            <div class="item">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail" >  
                  <div class="views-field views-field-field-product-picture">        
                    <div class="field-content"><a href="<?php echo $product['url']; ?>">
                      <img typeof="foaf:Image" src="<?php echo $product['thumbnail_url']; ?>" width="166" height="166" alt=""></a>
                    </div>  
                  </div>  
                  <div class="views-field views-field-title">        
                    <span class="field-content">
                      <a href="<?php echo $product['url']; ?>"><?php echo $product['title']; ?></a>
                    </span>  
                  </div>
                 </div>
              </div>
            </div>
          <?php endforeach; ?>      
        <?php endif; ?>         
      </div>
    </div>
  <?php endif; ?>
</div>