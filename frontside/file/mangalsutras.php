<?php include('./header.php'); ?>
  
  <div id="content-wrapper-parent">
    <div id="content-wrapper">                  
      <!-- Content -->
      <div id="content" class="clearfix">        
        
        <div id="breadcrumb" class="breadcrumb">
  <div itemprop="breadcrumb" class="container">
    <div class="row">
      <div class="col-md-24">
        <a href="index.html" class="homepage-link" title="Back to the frontpage">Home</a>        
        <span>/</span>
        <span class="page-title">Mangalsutras</span>
         </div>
    </div>
  </div>
</div>                
        <section class="content">                    
          <div class="container">
            <div class="row">                                          
              <div id="collection-content">
  <!-- Tags loading -->
  <div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
<div id="page-header" class="col-sm-24">
  <h1 id="page-title">Mangalsutras</h1>
</div>
<div class="collection-warper col-sm-24 clearfix"> 
<div class="collection-image-wrapper row">
<div class="collection-image col-sm-24 text-center">      
    <img src="cdn.shopify.com/s/files/1/0908/7252/collections/503416YGUAAA32_0.jpg?v=1435637330" alt="Rings" />      
    </div>
  </div>
</div>
<div class="collection-main-content">
<div id="col-main" class="collection collection-page col-xs-24 col-sm-24 ">
  <div class="container-nav clearfix">
    <div id="options" class="container-nav clearfix">
      <ul class="list-inline text-right">       
        <li class="grid_list">
          <ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
            <li data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="Grid">
              <span></span>
            </li>
            <li data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="List">
              <span></span>
            </li>
          </ul>
        </li>       
        <div class="sortBy">
            <div id="sortButtonWarper" class="dropdown-toggle" data-toggle="dropdown">
              <button id="sortButton">
                <span class="name">Featured</span><i class="fa fa-caret-down"></i>
              </button>
              <i class="sub-dropdown1"></i>
              <i class="sub-dropdown"></i>
            </div>
            <div id="sortBox" class="control-container dropdown-menu">
              <ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
                <li class="sort manual"><a href="mangalsutras/indexd07c.html?sort_by=manual">Featured</a></li>
                <li class="sort price-ascending"><a href="mangalsutras/index7c28.html?sort_by=price-ascending">Price: Low to High</a></li>
                <li class="sort price-descending"><a href="mangalsutras/index87b3.html?sort_by=price-descending">Price: High to Low</a></li>
                <li class="sort title-ascending"><a href="mangalsutras/index911b.html?sort_by=title-ascending">A-Z</a></li>
                <li class="sort title-descending"><a href="mangalsutras/index0466.html?sort_by=title-descending">Z-A</a></li>
                <li class="sort created-ascending"><a href="mangalsutras/index6868.html?sort_by=created-ascending">Oldest to Newest</a></li>
                <li class="sort created-descending"><a href="mangalsutras/index3f84.html?sort_by=created-descending">Newest to Oldest</a></li>
                <li class="sort best-selling"><a href="mangalsutras/index51e5.html?sort_by=best-selling">Best Selling</a></li>
              </ul>
            </div>
          </div>        
      </ul>
    </div>
  </div>
  <div id="sandBox-wrapper" class="group-product-item row collection-full">
    <ul id="sandBox" class="list-unstyled">      
      
 
<!--2nd image-->
    
      <?php
                //database connection
                include('../config.php');
//                $product_id = $_GET['product_id'];
                
               // $data = "SELECT status FROM product where status='inactive'"
               $data = "SELECT product_name,image FROM product where product_name ='mangalsutra'";            
//                $data = "SELECT product.subcategory_id, subcategory.subcategory_name, product.product_name FROM product INNER JOIN subcategory ON product.subcategory_id=subcategory.subcategory_id;";
                $result = $conn->query($data);
//                echo "<pre>"; print_r($result);die();
                while ($row = mysqli_fetch_array($result)) {
                    if (file_exists($row["image"])) {

                    $path = '../product/' . $row["image"];
                } else {

                    $path = 'product/picture/noimage.jpg';
                }                
//                echo "<pre>"; print_r($path);die();
                
                ?>
                <li class="element no_full_width" data-alpha="Gravida est quis euismod" data-price="20000">
                        <ul class="row-container list-unstyled clearfix">
                            <li class="row-left"> 
                                <a href="<?php echo $path ?>" class="container_item">
                                <img src='<?php echo $path ?>' height='200px' width='200px'>
                                </a>
                                <div class="hbw">
                                <span class="hoverBorderWrapper"></span>
                              </div>
                                <li class="row-right parent-fly animMix">
	  <div class="product-content-left">
        <a class="title-5" href="mangalsutras/products/gravida-est-quis-euismod.html">Gravida est quis euismod</a>        
          <span class="shopify-product-reviews-badge" data-id="1293231043"></span>        
      </div>
      <div class="product-content-right">
      <div class="product-price">                
        <span class="price">          
          <span class='money'>$200.00</span>          
        </span>                   
      </div>
      </div>
      <div class="list-mode-description">
        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
      </div>
      <div class="hover-appear">
        <form action="https://cs-utc-jewelry.myshopify.com/cart/add" method="post">          
          <div class="hide clearfix"> 
            <select name="id" >
            <option selected="selected" value="3947636099">black / medium</option>
            <option value="3947636163">white / medium</option>
            <option value="3947636227">red / medium</option>
            <option value="3947636291">green / medium</option>
            </select>
          </div>          
          <div class="effect-ajax-cart">            
            <input type="hidden" name="quantity" value="1" />            
            <button class="select-option" type="button" onclick="window.location='../products/gravida-est-quis-euismod.html';"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
            </div>        
        </form>               
        <div class="product-ajax-qs hidden-xs hidden-sm">
            <div data-handle="gravida-est-quis-euismod" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
              <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
              <span class="product-json hide">{"id":1293231043,"title":"Gravida est quis euismod","handle":"gravida-est-quis-euismod","description":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e","published_at":"2015-06-29T00:22:00-04:00","created_at":"2015-06-29T00:22:13-04:00","vendor":"Vendor 1","type":"Sweaters Wear","tags":["Above $200","Best Seller","Green","M"],"price":20000,"price_min":20000,"price_max":20000,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":3947636099,"title":"black \/ medium","option1":"black","option2":"medium","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":2792394499,"product_id":1293231043,"position":1,"created_at":"2015-06-29T03:08:26-04:00","updated_at":"2015-06-29T03:08:26-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/7_15911c75-e357-4cc1-a903-950a8ed4b779.jpg?v=1435561706","variant_ids":[3947636099]},"available":true,"name":"Gravida est quis euismod - black \/ medium","public_title":"black \/ medium","options":["black","medium"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947636163,"title":"white \/ medium","option1":"white","option2":"medium","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":2792394819,"product_id":1293231043,"position":2,"created_at":"2015-06-29T03:08:27-04:00","updated_at":"2015-06-29T03:08:27-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/8_21b3273c-8fc0-40e8-8aa8-69ef72330c30.jpg?v=1435561707","variant_ids":[3947636163]},"available":true,"name":"Gravida est quis euismod - white \/ medium","public_title":"white \/ medium","options":["white","medium"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947636227,"title":"red \/ medium","option1":"red","option2":"medium","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":2792395971,"product_id":1293231043,"position":3,"created_at":"2015-06-29T03:08:28-04:00","updated_at":"2015-06-29T03:08:28-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/9_e5beaaab-97d4-4ab2-be6a-57c02ac20ab9.jpg?v=1435561708","variant_ids":[3947636227]},"available":true,"name":"Gravida est quis euismod - red \/ medium","public_title":"red \/ medium","options":["red","medium"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947636291,"title":"green \/ medium","option1":"green","option2":"medium","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":2792397379,"product_id":1293231043,"position":4,"created_at":"2015-06-29T03:08:29-04:00","updated_at":"2015-06-29T03:08:29-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10.jpg?v=1435561709","variant_ids":[3947636291]},"available":true,"name":"Gravida est quis euismod - green \/ medium","public_title":"green \/ medium","options":["green","medium"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/7_15911c75-e357-4cc1-a903-950a8ed4b779.jpg?v=1435561706","\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/8_21b3273c-8fc0-40e8-8aa8-69ef72330c30.jpg?v=1435561707","\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/9_e5beaaab-97d4-4ab2-be6a-57c02ac20ab9.jpg?v=1435561708","\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10.jpg?v=1435561709"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/7_15911c75-e357-4cc1-a903-950a8ed4b779.jpg?v=1435561706","options":["Color","Size"],"content":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e"}</span>
            </div>
        </div>        
          <a class="wish-list" href="account/login.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>                  
      </div>
    </li>
  </ul> 
      </li>      
                         <?php
                }
                $conn->close();
                ?>
      
    
  </ul> 
      </li>  
<!--2nd image code over-->
             
    </ul>
  </div>

</div>

  </div>
</div>
<script type="text/javascript">

  $(document).ready(function() {
    if(location.search.search("sort_by=") == -1){

    }
    else{
      if(location.search != ""){
        var stpo = location.search.search("sort_by=")+8, sortby_url = '.'+location.search.substr(stpo).split('='), sortby_url_a = sortby_url+" a";
        $(sortby_url).addClass("active");
        $('#sortButton .name').html($(sortby_url_a).html());
      }
      else{
        $('.manual').addClass("active");
      }
    }    
  });
</script>           
            </div>
          </div>
      </section>        
      </div>
    </div>
  </div>

  <?php include('./footer.php'); ?>