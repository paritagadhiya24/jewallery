<?php include('./header.php'); ?>
 <script>
  function addaffix(scr){
    if($(window).innerWidth() >= 1024){
      if(scr > $('#top').innerHeight()){
        if(!$('#top').hasClass('affix')){
          $('#top').addClass('affix').addClass('animated');
        }
      }
      else{
        if($('#top').hasClass('affix')){
          $('#top').prev().remove();
          $('#top').removeClass('affix').removeClass('animated');
        }
      }
    }
    else $('#top').removeClass('affix');
  }
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    addaffix(scrollTop);
  });
  $( window ).resize(function() {
    var scrollTop = $(this).scrollTop();
	addaffix(scrollTop);
  });
</script>
<!--  <div class="home-slider-wrapper clearfix">

    <div class="camera_wrap" id="home-slider">
 
      <div data-src="banner\slide-image-1.jpg">
        
        <div class="camera_caption camera_title_1 fadeIn">
          <a href="/collections/bracelets" style="color:#010101;">Live the moment</a>
        </div>
        
        <div class="camera_caption camera_caption_1 fadeIn" style="color:#010101;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        </div>

        <div class="camera_caption camera_image-caption_1 moveFromLeft">
          <img src="banner\slide-image-1.jpg" alt="image_caption" />
        </div>

        <div class="camera_cta_1">
          <a href="/collections/bracelets" class="btn">See Collection</a>
        </div>
        

      </div>
      
      <div data-src="C:\xampp\htdocs\j\frontside\banner\slide-image-2.jpg">
        
        <div class="camera_caption camera_title_2 moveFromLeft">
          <a href="/collections/sample-collection-with-left-slidebar" style="color:#666666;">Love s embrace</a>
        </div>
      
        <div class="camera_caption camera_image-caption_2 moveFromLeft">
          <img src="//cdn.shopify.com/s/files/1/0908/7252/t/2/assets/slide-image-caption-2.png?13025893076586521119" alt="image_caption" />
        </div>

        <div class="camera_cta_2">
          <a href="/collections/sample-collection-with-left-slidebar" class="btn">See Collection</a>
        </div>
        

      </div>
  
      
      <div data-src="C:\xampp\htdocs\j\frontside\banner\slide-image-3.jpg">
   
        <div class="camera_caption camera_image-caption_3 moveFromLeft">
          <img src="//cdn.shopify.com/s/files/1/0908/7252/t/2/assets/slide-image-caption-3.png?13025893076586521119" alt="image_caption" />
        </div>
      
        <div class="camera_cta_3">
          <a href="/collections/sample-collection-with-right-slidebar" class="btn">See Collection</a>
        </div>
      </div>
    </div>
  </div>-->
<div class="content-wrapper" style="min-height: 916.3px;"> 
     
   <div id="content-wrapper-parent">
    <div id="content-wrapper"> 
         <!--slider code-->
       <div class="home-slider-wrapper clearfix">    
    <div class="camera_wrap" id="home-slider">     
      <div data-src="banner/slide-image-8.jpg">
        
        <div class="camera_caption camera_title_1 fadeIn">
          <a href="#" style="color:#010101;"></a>
        </div>
        
<!--        <div class="camera_caption camera_caption_1 fadeIn" style="color:#010101;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        </div>-->
        
        <div class="camera_caption camera_image-caption_1 moveFromLeft">
            <!--<img src="banner/slide-image-2.jpg" alt="image_caption" />-->
        </div>
        
<!--        <div class="camera_cta_1">
          <a href="#" class="btn">See Collection</a>
        </div>-->
       
      </div>
      
      <div data-src="banner/slide-image-5.jpg">
        
        <div class="camera_caption camera_title_2 moveFromLeft">
<!--          <a href="#" style="color:#666666;">Love�s embrace</a>-->
        </div>
        
        <div class="camera_caption camera_image-caption_2 moveFromLeft">
            <!--<img src="banner/slide-image-3.jpg" alt="image_caption" />-->
        </div>
        
<!--        <div class="camera_cta_2">
          <a href="#" class="btn">See Collection</a>
        </div>-->
       
      </div>
      
      <div data-src="banner/slide-image-6.jpg">
        
        <div class="camera_caption camera_image-caption_3 moveFromLeft">
            <!--<img src="banner/slide-image-2.jpg" alt="image_caption" />-->
        </div>
        
<!--        <div class="camera_cta_3">
          <a href="#" class="btn">See Collection</a>
        </div>        -->
      </div>       
    </div>
  </div>         
      <!-- Content -->
    <!--slider code over-->
    <div id="content" class="clearfix">        
        <section class="content">          
            <div id="col-main" class="clearfix">
                <div class="home-popular-collections">
                    <div class="container">
                        <div class="group_home_collections row">
                            <div class="col-md-24">                             
                                <div class="home_collections">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <h6 class="general-title">Popular Collections</h6>
                                    <div class="home_collections_wrapper">
                                        <div id="home_collections" style="opacity: 1; display: block;" class="owl-carousel owl-theme">
                                            <div class="owl-wrapper-outer1">
						<div class="owl-wrapper1" style="width: 2384px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                    <?php
                                                                    //database connection
                                                                    include('../config.php');
                                                                    //data listing desc order                                  
                                                                    $data = "select * from category ORDER BY category_id "; 
                                                                    $result = $conn->query($data); 
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                        if (file_exists($row["image"])) {

                                                                    $path =  $row["image"];
                                                                } else {

                                                                    $path = 'picture/noimage.jpg';
                                                                }           
                                                                   ?>
                                                    <div class="owl-item" style="width: 298px;"><div class="home_collections_item">
                                                            <div class="home_collections_item_inner">
                                                                
                                                                <div class="collection-details">
                                                                    
                                                                    <!--<a href="<?php echo $path ?>" title="Browse our Bracelets">-->
                                                                        <img src='<?php echo $path ?>' alt="Bracelets" height="270" width="270">
                                                                    </a>
                                                                </div>
                                                                
                                                                <div class="hover-overlay">
                                                                    <span class="col-name"><a href="<?php echo 'product.php?cat_id=' . $row['category_id']; ?>"><?php echo $row['category_name']?></a></span>
                                                                    <div class="collection-action">
                                                                        <a href="<?php echo 'product.php?cat_id=' . $row['category_id']; ?>">See the Collection</a>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>                                                                                                                                                                                    
                                                        </div></div>
                                                                <?php
                                                                }
                                                                $conn->close();
                                                                ?>
                                                </div></div>
                                            <div class="owl-controls clickable" style="display: none;"><div class="owl-buttons"><div class="owl-prev"><span class="btooltip" title="" data-original-title="Previous"></span></div><div class="owl-next"><span class="btooltip" title="" data-original-title="Next"></span></div></div></div></div>
                                    </div>
                                </div>
                                
                                <script>
                                    $(document).ready(function () {
                                        $('.collection-details').hover(
                                                function () {
                                                    $(this).parent().addClass("collection-hovered");
                                                },
                                                function () {
                                                    $(this).parent().removeClass("collection-hovered");
                                                });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-newproduct">
                    <div class="container">
                        <div class="group_home_products row">
                            <div class="col-md-24">

                                <div class="home_products">
                                    <h6 class="general-title">New Products</h6>
                                    <div class="home_products_wrapper">
                                        <div id="home_products">
                                            <?php
                                                        //database connection
                                                        include('../config.php');
//                                                        
                                                $data1 = "SELECT * FROM product  LIMIT 6";
                                                        $result1 = $conn->query($data1);
//                                                      print_r($result); exit();
                                                        while ($row = mysqli_fetch_array($result1)) {
                                                            if (file_exists($row["image"])) {

                                                            $path = $row["image"];
                                                        } else {

                                                            $path = 'picture/noimage.jpg';
                                                        }                
                                                  // echo "<pre>"; print_r($path);die(); 
                                                        
//                                                        }
//                                                        $conn->close();
                                                        ?>
                                            <div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="4">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="row-left">
                                                       
                                                        
                                                        
                                                        <!--<a href="<?php echo $path ?>" class="container_item">-->
                                                            <img src='<?php echo $path ?>' class="img-responsive" alt="Maximus quam posuere" height="270" width="270">
                                                            <span class="sale_banner">
                                                                <span class="sale_text">Sale</span>
                                                            </span>
                                                            
                                                        </a>
                                                        <div class="hbw">
                                                            <span class="hoverBorderWrapper"></span>
                                                        </div>
                                                    </li>
                                                    <li class="row-right parent-fly animMix">
                                                        <div class="product-content-left">
                                                            <a class="title-5" href="#"><?php echo $row['product_name'] ?></a>
                                                            <span class="shopify-product-reviews-badge" data-id="1293227907"></span>
                                                        </div>
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                <span class="price_sale"><?php echo $row['price'] ?></span></span>
                                                                <!--<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>-->
                                                            </div>
                                                        </div>
                                                        <div class="list-mode-description">
                                                            <div class="header">Product Descriptions</div>
                                                        <label class="wrapper-title"><?php echo $row['product_description'] ?></label>
                                                            <!--Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...-->
                                                        </div>
                                                        <div class="hover-appear">
                                                            <form action="https://cs-utc-jewelry.myshopify.com/cart/add" method="post">
<!--                                                                <div class="hide clearfix"> 
                                                                    <select name="id">
                                                                        <option selected="selected" value="3947629763">black / small</option>
                                                                        <option value="3947629827">white / small</option>
                                                                        <option value="3947629891">black / medium</option>
                                                                        <option value="3947629955">white / medium</option>
                                                                    </select>
                                                                </div>-->
                                                                <div class="effect-ajax-cart">
                                                                    <input name="quantity" value="1" type="hidden">
                                                                    <a href="<?php echo 'productdetail.php?pro_id=' . $row['product_id']; ?>"><button class="select-option" type="button"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button></a>
                                                                </div>        
                                                            </form>
<!--                                                            <div class="product-ajax-qs hidden-xs hidden-sm">
                                                                <div data-handle="maximus-quam-posuere-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                    <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
                                                                    <span class="product-json hide">{"id":1293227907,"title":"Maximus quam posuere","handle":"maximus-quam-posuere-1","description":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e","published_at":"2015-06-29T00:22:05-04:00","created_at":"2015-06-29T00:22:06-04:00","vendor":"Vendor 3","type":"Sweaters Wear","tags":["Best Seller","Sale Off"],"price":20000,"price_min":20000,"price_max":20000,"available":true,"price_varies":false,"compare_at_price":30000,"compare_at_price_min":30000,"compare_at_price_max":30000,"compare_at_price_varies":false,"variants":[{"id":3947629763,"title":"black \/ small","option1":"black","option2":"small","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566019,"product_id":1293227907,"position":1,"created_at":"2015-06-29T03:11:53-04:00","updated_at":"2015-06-29T03:11:53-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","variant_ids":[3947629763,3947629891]},"available":true,"name":"Maximus quam posuere - black \/ small","public_title":"black \/ small","options":["black","small"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629827,"title":"white \/ small","option1":"white","option2":"small","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566339,"product_id":1293227907,"position":2,"created_at":"2015-06-29T03:11:54-04:00","updated_at":"2015-06-29T03:11:54-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914","variant_ids":[3947629827,3947629955]},"available":true,"name":"Maximus quam posuere - white \/ small","public_title":"white \/ small","options":["white","small"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629891,"title":"black \/ medium","option1":"black","option2":"medium","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566019,"product_id":1293227907,"position":1,"created_at":"2015-06-29T03:11:53-04:00","updated_at":"2015-06-29T03:11:53-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","variant_ids":[3947629763,3947629891]},"available":true,"name":"Maximus quam posuere - black \/ medium","public_title":"black \/ medium","options":["black","medium"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629955,"title":"white \/ medium","option1":"white","option2":"medium","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566339,"product_id":1293227907,"position":2,"created_at":"2015-06-29T03:11:54-04:00","updated_at":"2015-06-29T03:11:54-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914","variant_ids":[3947629827,3947629955]},"available":true,"name":"Maximus quam posuere - white \/ medium","public_title":"white \/ medium","options":["white","medium"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","options":["Color","Size"],"content":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e"}</span>
                                                                </div>
                                                            </div>-->
                                                            <a class="wish-list" href="<?php echo 'wishlist.php?pro_id=' . $row['product_id']; ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                            
                                                        </div>
                                                        
                                                    </li>
                                                </ul> 
                                            </div>
                                           <?php
                                                             }
                                                        $conn->close();
                                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-banner-wrapper">
                    <div class="container">
                        <div id="home-banner" class="text-center clearfix">
                            <img class="pulse img-banner-caption" src="cdn.shopify.com/s/files/1/0908/7252/t/2/assets/home_banner_image_textf4b4.png?1309057467802046266" alt="">
<!--                            <div class="home-banner-caption">
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>-->
                            <div class="home-banner-action">
                                <a href="index.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="home-blog">
                    <div class="container">
                        <div class="home-promotion-blog row">
                            <h6 class="general-title">Latest News</h6>
                            <div class="home-bottom_banner_wrapper col-md-12">
                                <div id="home-bottom_banner" class="home-bottom_banner">
                                    <a href="collections.html">
                                        <img src="cdn.shopify.com/s/files/1/0908/7252/t/2/assets/home_bottom_bannerf4b4.jpg?1309057467802046266" alt=""></a>
                                </div>
                            </div>
                            <div class="home-blog-wrapper col-md-12">
                                <div id="home_blog" class="home-blog">
                                    <div class="home-blog-item row">
                                        <div class="date col-md-4">
                                            <div class="date_inner">
                                                <p><small>July</small><span>08</span></p>
                                            </div>
                                        </div>
                                        <div class="home-blog-content col-md-20">
                                            <h4><a href="blogs/blogs/47648387-sample-blog-post-with-left-slidebar.html">sample blog post with left slidebar</a></h4>
                                            <ul class="list-inline">
                                                <li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
                                                <li>/</li>
                                                <li class="comment">
                                                    <a href="blogs/blogs/47648387-sample-blog-post-with-left-slidebar.html#comments">
                                                        <span><i class="fa fa-pencil-square-o"></i> 0</span> Comments
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="intro">Shoe street style leather tote oversized sweatshirt A.P.C. Prada Saffiano crop slipper denim shorts spearmint....</div>
                                        </div>
                                    </div>
                                    <div class="home-blog-item row">
                                        <div class="date col-md-4">
                                            <div class="date_inner">
                                                <p><small>June</small><span>30</span></p>
                                            </div>
                                        </div>
                                        <div class="home-blog-content col-md-20">
                                            <h4><a href="blogs/blogs/44831939-vel-illum-qui-dolorem-eum-fugiat.html">vel illum qui dolorem eum fugiat</a></h4>
                                            <ul class="list-inline">
                                                <li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
                                                <li>/</li>
                                                <li class="comment">
                                                    <a href="blogs/blogs/44831939-vel-illum-qui-dolorem-eum-fugiat.html#comments">
                                                        <span><i class="fa fa-pencil-square-o"></i> 3</span> Comments
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="intro">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</div>
                                        </div>
                                    </div>
                                    <div class="home-blog-item row">
                                        <div class="date col-md-4">
                                            <div class="date_inner">
                                                <p><small>June</small><span>30</span></p>
                                            </div>
                                        </div>
                                        <div class="home-blog-content col-md-20">
                                            <h4><a href="blogs/blogs/44831811-sample-blog-post-full-width.html">sample blog post full width</a></h4>
                                            <ul class="list-inline">
                                                <li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
                                                <li>/</li>
                                                <li class="comment">
                                                    <a href="blogs/blogs/44831811-sample-blog-post-full-width.html#comments">
                                                        <span><i class="fa fa-pencil-square-o"></i> 0</span> Comments
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="intro">Shoe street style leather tote oversized sweatshirt A.P.C. Prada Saffiano crop slipper denim shorts spearmint....</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--FEATURED-->
                                <div class="home-feature">
                    <div class="container">
                        <div class="group_featured_products row">
                            <div class="col-md-24">
                                <div class="home_fp">
                                    <h6 class="general-title">Featured Products</h6>
                                    <div class="home_fp_wrapper">
                                        <div id="home_fp" style="opacity: 1; display: block;" class="owl-carousel owl-theme">                                            
                                            <div class="owl-wrapper-outer1">
                                                <div class="owl-wrapper1" style="width: 4752px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1188px, 0px, 0px);">                                                    
                                                     <?php
                                                        //database connection
                                                        include('../config.php');
//                                                        
                                                $data1 = "SELECT * FROM product  LIMIT 8";
                                                        $result1 = $conn->query($data1);
//                                                      print_r($result); exit();
                                                        while ($row = mysqli_fetch_array($result1)) {
                                                            if (file_exists($row["image"])) {

                                                            $path = $row["image"];
                                                        } else {

                                                            $path = 'picture/noimage.jpg';
                                                        }                
                                                  // echo "<pre>"; print_r($path);die(); 
                                                        
//                                                        }
//                                                        $conn->close();
                                                        ?>
                                                  
                                                    <div class="owl-item" style="width: 297px;">
                                                       
                                                        <div class="element no_full_width not-animated" data-animate="fadeInUp" data-delay="800">
                                                            <ul class="row-container list-unstyled clearfix">
                                                                <li class="row-left">
                                                                    <!--<a href="<?PHP echo $path ?>" class="container_item">-->

                                                                        <img src='<?php echo $path ?>' class="img-responsive" alt="Maximus quam posuere" height="270" width="270">
                                                                        <span class="sale_banner">
                                                                            <span class="sale_text">Sale</span>
                                                                        </span>
                                                                    </a>
                                                                    <div class="hbw">
                                                                        <span class="hoverBorderWrapper"></span>
                                                                    </div>
                                                                </li>
                                                                <li class="row-right parent-fly animMix">
                                                                    <div class="product-content-left">
                                                                        <a class="title-5" href="#"><?php echo $row['product_name']?></a>
                                                                        <span class="shopify-product-reviews-badge" data-id="1293227907"></span>
                                                                    </div>
                                                                    <div class="product-content-right">
                                                                        <div class="product-price">
                                                                            <span class="price_sale"><span class="money" data-currency-usd="$200.00"><?php echo $row['price'] ?></span></span>
                                                                            <!--<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>-->
                                                                        </div>
                                                                    </div>
<!--                                                                    <div class="list-mode-description">
                                                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
                                                                    </div>-->
                                                                    <div class="hover-appear">
                                                         
                                                                        
                                                                           <!--<a href="<?php echo 'productdetail.php?pro_id=' . $row['product_id']; ?>">-->
                                                                        
<!--                                                                            <div class="hide clearfix"> 
                                                                                <select name="id">
                                                                                    <option selected="selected" value="3947629763">black / small</option>
                                                                                    <option value="3947629827">white / small</option>
                                                                                    <option value="3947629891">black / medium</option>
                                                                                    <option value="3947629955">white / medium</option>
                                                                                </select>
                                                                            </div>-->
                                                                            <div class="effect-ajax-cart">
<!--                                                                                <a href="<?php echo 'productdetail.php?pro_id=' . $row['product_id']; ?>"><button class="select-option"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button></a>-->
                                                                            </div>        
                                                                            <a class="wish-list" href="<?php echo 'productdetail.php?pro_id=' . $row['product_id']; ?>" title="Details"><i class="fa fa-list"></i><span class="list-mode"></span></a>
<!--                                                                        <div class="product-ajax-qs hidden-xs hidden-sm">
                                                                            <div data-handle="maximus-quam-posuere-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                                <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
                                                                                <span class="product-json hide">{"id":1293227907,"title":"Maximus quam posuere","handle":"maximus-quam-posuere-1","description":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e","published_at":"2015-06-29T00:22:05-04:00","created_at":"2015-06-29T00:22:06-04:00","vendor":"Vendor 3","type":"Sweaters Wear","tags":["Best Seller","Sale Off"],"price":20000,"price_min":20000,"price_max":20000,"available":true,"price_varies":false,"compare_at_price":30000,"compare_at_price_min":30000,"compare_at_price_max":30000,"compare_at_price_varies":false,"variants":[{"id":3947629763,"title":"black \/ small","option1":"black","option2":"small","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566019,"product_id":1293227907,"position":1,"created_at":"2015-06-29T03:11:53-04:00","updated_at":"2015-06-29T03:11:53-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","variant_ids":[3947629763,3947629891]},"available":true,"name":"Maximus quam posuere - black \/ small","public_title":"black \/ small","options":["black","small"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629827,"title":"white \/ small","option1":"white","option2":"small","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566339,"product_id":1293227907,"position":2,"created_at":"2015-06-29T03:11:54-04:00","updated_at":"2015-06-29T03:11:54-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914","variant_ids":[3947629827,3947629955]},"available":true,"name":"Maximus quam posuere - white \/ small","public_title":"white \/ small","options":["white","small"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629891,"title":"black \/ medium","option1":"black","option2":"medium","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566019,"product_id":1293227907,"position":1,"created_at":"2015-06-29T03:11:53-04:00","updated_at":"2015-06-29T03:11:53-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","variant_ids":[3947629763,3947629891]},"available":true,"name":"Maximus quam posuere - black \/ medium","public_title":"black \/ medium","options":["black","medium"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629955,"title":"white \/ medium","option1":"white","option2":"medium","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566339,"product_id":1293227907,"position":2,"created_at":"2015-06-29T03:11:54-04:00","updated_at":"2015-06-29T03:11:54-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914","variant_ids":[3947629827,3947629955]},"available":true,"name":"Maximus quam posuere - white \/ medium","public_title":"white \/ medium","options":["white","medium"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","options":["Color","Size"],"content":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e"}</span>
                                                                            </div>
                                                                        </div>-->
                                                                        <a class="wish-list" href="<?php echo 'wishlist.php?pro_id=' . $row['product_id']; ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                                    </div>
                                                                </li>
                                                            </ul> 
                                                        </div>
                                                        </div>
                                                    
                                                       <?php
                                                             }
                                                        $conn->close();
                                                            ?>
                                                   
                                                </div>
                                            </div>                                                                                                                                    
                                           <div class="owl-controls clickable">
                                               <div class="owl-buttons">
                                                   <div class="owl-prev">
                                                       <span class="btooltip" title="" data-original-title="Previous"></span>
                                                   </div>
                                                   <div class="owl-next">
                                                       <span class="btooltip" title="" data-original-title="Next"></span>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- OVER FETURED-->
                <!--POPULAR BRAND-->
                <div class="home-partners">
                    <div class="container">
                        <div class="partners-logo row">
                            <div class="col-md-24">
                                <div id="partners-container" class="clearfix">
                                    <h6 class="general-title">Popular Brands</h6>
                                    <div id="partners" class="clearfix owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer1"><div class="owl-wrapper1" style="width: 2632px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="150">
                                                        <!--<a class="animated" href="collections/vendors323e.html?q=Vendor%201">-->
                                                            <img class="pulse" src="banner/Clogau-logo.jpg" alt="">
                                                        </a>
                                                    </div></div><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="300">
                                                        <!--<a class="animated" href="collections/vendorsc606.html?q=Vendor%202">-->
                                                            <img class="pulse" src="banner/asmi-jewellery-logo.jpg" alt="">
                                                        </a>
                                                    </div></div><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="450">
                                                        <!--<a class="animated" href="collections/vendors97a5.html?q=Vendor%203">-->
                                                            <img class="pulse" src="banner/Gitanjali-Groups-new-logo1-628x250.jpg" alt="">
                                                        </a>
                                                    </div></div><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="600">
                                                        <!--<a class="animated" href="collections/vendorsdc04.html?q=Vendor%204">-->
                                                            <img class="pulse" src="banner/debearj-logo-black.png" alt="">
                                                        </a>
                                                    </div></div><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="750">
                                                        <!--<a class="animated" href="collections/vendors323e.html?q=Vendor%201">-->
                                                            <img class="pulse" src="banner/diya-jewellery-logo.jpg" alt="">
                                                        </a>
                                                    </div></div><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="900">
                                                        <!--<a class="animated" href="collections/vendorsc606.html?q=Vendor%202">-->
                                                            <img class="pulse" src="banner/header-logo_yUUTcyu_MPMT8m8.png" alt="">
                                                        </a>
                                                    </div></div><div class="owl-item" style="width: 188px;"><div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1050">
                                                        <!--<a class="animated" href="collections/vendors97a5.html?q=Vendor%203">-->
                                                            <img class="pulse" src="banner/buccellati_1443098112.jpg" alt="">
                                                        </a>
                                                    </div></div></div></div>                                        
                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><span class="btooltip" title="" data-original-title="Previous"></span></div>
                                                <div class="owl-next"><span class="btooltip" title="" data-original-title="Next"></span></div></div></div></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--OVER POPULAR BRAND-->
            </div>
             
        </section>        
    </div>
    </div>
  </div> 
   
    

<?php include('./footer.php'); ?>
