<style type="text/css">
    #map-canvas {
      height: 400px;
      margin: 15px 0px;
      border: 1px solid #000;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
    <script src="<?php echo myfunctionlib_theme_path('where/markerwithlabel.js'); ?>"></script>
    <script src="<?php echo myfunctionlib_theme_path('where/map.js'); ?>"></script>
    <script>
      $(function()
      {
        $('#countrycode').change(function(){
          $('.country').hide();
          $('#' + $(this).val()).show();            
        });     
      });
    </script>
<!-- InstanceBeginEditable name="mainContainer" -->
<div id="container" style="padding-bottom:5%;">
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>    
  </div>
  <div id="productTitleDetailPage">  
    <h2><?php echo $title; ?></h2>      
    <!-- <h4>Find TERRA by Battat™<br>Items near you</h4> -->
  </div>
  <div class="content page"<?php print $content_attributes; ?>>
    <div class="thumbHeader">
        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-top.png'); ?>" />
    </div>
    <div class="thumbMiddle"> 

      <table class="thumbPageContainer" >
        <tr>
          <td colspan="2">Like fashion and, well, everything, Lori™ dolls, clothes and accessories are always changing. This site is our OG Lookbook. It includes many things
OG. Some are available in stores right now. Others are from our past or our future.
<br /><br />
This page will help you find stores near you that sell Lori™ things. They might not necessarily carry the exact thing you are looking for. (We suggest
you call ahead to check.) Either way, they do carry lots of Lori™ stuffs we think you'll love.
          </td>
        </tr>
        <tr  style="display:none;">
          <td colspan="2">
          <b>Country:</b>
          <Select class="CountrySelect" id="countrycode" >
            <option value="US">US</option>
            <!-- <option value="CA">Canada</option>   -->      
          </Select>
          </td>
        </tr>
       <tr style="display:none;">
          <td>
           <b>Address:&nbsp;</b><input type="text" id="address" style="width:40%" value="">
          </td>

          <td>
            <b>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" id="city" style="width:40%" value="">
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <div id="US" class="country" ><b>CITY and STATE, and/or ZIP CODE ( e.g. Los Angeles, CA ):</b></div>            
          <div id="CA" class="country" style="display:none"><b>Address, City, Province, and/or Postal code:</b></div>
          <input type="text" id="addressInput" style="width:80%" value="">
        </td>
        </tr> 
        <tr>
          <td colspan="2">                
          <div id="searchbar">
              <div id="search-location"> 
              
                <b>Radius:</b>
                <select name="radiusSelect" id="radiusSelect">
                  <option value="1">1 mile</option>
                  <option value="5">5 miles</option>
                  <option value="10">10 miles</option>
                  <option selected="" value="25">25 miles</option>
                  <option value="50">50 miles</option>
                  <option value="100">100 miles</option>
                </select>
                      
                <br>
                <br>
                <input type="button" value="Search" onClick="getcoord();">            
                <div id="outputDiv"></div>
              </div>
              
          </div>
        </td>
        </tr> 
      </table>
      <br />
      <div id="map-container">
        <div id="sidebar">
          <ul id="sidebar-list"></ul>
        </div>
        <div id="map-canvas"></div>
        <div id="sidebar2">
          <ul id="sidebar-list-2"></ul>
        </div>
      </div> 

    </div>
    <div class="thumbFooter">
        <img class="img-responsive" src="<?php echo myfunctionlib_theme_path('images/product-page-contentBox-bottom.png'); ?>" />
    </div>
  </div>
</div>
<!-- InstanceEndEditable -->
