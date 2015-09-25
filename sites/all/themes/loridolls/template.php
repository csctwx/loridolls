<?php
function loridolls_preprocess_page(&$vars, $hook) { 
  // Add js file in front page
  $slide_types = array('fashion_dolls',
                      'ballerinas',
                      'pets_dolls',
                      'fashion_outfits',
                      'fashion_accessories',
                      'urban_living',
                      'weekend_gateway');
  if ($vars['is_front'] || in_array($vars['node']->type, $slide_types)) {
    drupal_add_js(path_to_theme().'/nivo-slider/demo/scripts/jquery-1.11.1.min.js');    
    drupal_add_js(path_to_theme().'/nivo-slider/jquery.nivo.slider.js');
    drupal_add_js(path_to_theme().'/nivo-slider/script.js');
  }

  $vars['scripts'] = drupal_get_js();  
  
  // modify breadcrumbs if it is view page or node type belong to categories
  $dolls_node_ids = taxonomy_select_nodes(2); 
  $accessories_node_ids = taxonomy_select_nodes(1); 
  $dolls_types = array();
  $accessories_types = array();
  foreach ($dolls_node_ids as $dolls_node_id) {
    $dolls_node = node_load($dolls_node_id);
    $dolls_type = str_replace(' ', '_', strtolower($dolls_node->title));
    $dolls_type = str_replace('_&_', '_', $dolls_type);
    $dolls_types[] = $dolls_type;
  }

  foreach ($accessories_node_ids as $accessories_node_id) {
    $accessories_node = node_load($accessories_node_id);
    $accessories_types[] = str_replace(' ', '_', strtolower($accessories_node->title));    
  }



  // kpr($dolls_types); die();
  $views_page = views_get_page_view();
  if (is_object($views_page)) {    
    $view_name = $views_page->name; 
    if(in_array($view_name, $dolls_types)){
      myfunctionlib_set_breadcrumbs('', 'dolls');
    }
    elseif(in_array($view_name, $accessories_types)){
      myfunctionlib_set_breadcrumbs('', 'accessories');
    }       
  }

  $node_type = $vars['node']->type;  
  if($node_type){ 
    if(in_array($node_type, $accessories_types)) {
      myfunctionlib_set_breadcrumbs($node_type, 'accessories');
    }
    elseif(in_array($node_type, $dolls_types)){      
        myfunctionlib_set_breadcrumbs($node_type, 'dolls');
    }    
  }
}

function loridolls_preprocess_image_style(&$vars) { 
  $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}


function loridolls_menu_tree($variables) {
  return '<ul>' . $variables ['tree'] . '</ul>';
}

function loridolls_menu_link(array $variables) {
  $element = $variables ['element'];
  $sub_menu = '';

  if ($element ['#below']) {
    $sub_menu = drupal_render($element ['#below']);
  }
  $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
  return '<li class="' . ($element ['#below'] ? ' has-sub':'') . '">' . $output . $sub_menu . "</li>\n";
}

function loridolls_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb']; 
  // kpr($breadcrumb); die();
  if (!empty($breadcrumb)) {
    // Adding the title of the current page to the breadcrumb.
    $breadcrumb[] = drupal_get_title();
    
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}

function loridolls_preprocess_views_view(&$vars) {
  $view = &$vars['view'];
  // Make sure it's the correct view
  if ($view->name == 'videos') {
    // add needed javascript
    drupal_add_js(drupal_get_path('theme', 'loridolls') . '/js/html5gallery.js');
    // add needed stylesheet
    drupal_add_css(drupal_get_path('theme', 'loridolls') .'/css/video.css');
  }
}

?>