<?php include('./header.php'); ?>
<br>
<br><br>
<br>
<br>
<br>
<div class="content-wrapper" style="min-height: 916.3px;"> 
    <div id="content" class="clearfix">        
        <section class="content">          
            <div id="col-main" class="clearfix">
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
						error_reporting(0);
                                                $nm=$_GET['q'];
                                                 // '<pre>';print_r($nm);die;
						$q="select * from product where product_name like '%$nm%'";
                                                
                                                
						$result = $conn->query($q); 
//                                                 echo '<pre>';print_r($result);die;
                                                
                                                if ($result->num_rows > 0) 
						{
							while($row = $result->fetch_assoc()) {
                                                            
                                                            if (file_exists($row["image"])) {

                                                                    $path =  $row["image"];
                                                                } else {

                                                                    $path = 'picture/noimage.jpg';
                                                                } 
                                                        
                                                
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
                                                            <a class="title-5" href="products/maximus-quam-posuere-1.html"><?php echo $row['product_name'] ?></a>
                                                            <span class="shopify-product-reviews-badge" data-id="1293227907"></span>
                                                        </div>
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                <span class="price_sale"><span class="money" data-currency-usd="$200.00"><?php echo $row['price'] ?></span></span>
                                                                <!--<del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>-->
                                                            </div>
                                                        </div>
<!--                                                        <div class="list-mode-description">
                                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
                                                        </div>-->
                                                        <div class="hover-appear">
                                                            <form action="https://cs-utc-jewelry.myshopify.com/cart/add" method="post">
                                                                <div class="hide clearfix"> 
                                                                    <select name="id">
                                                                        <option selected="selected" value="3947629763">black / small</option>
                                                                        <option value="3947629827">white / small</option>
                                                                        <option value="3947629891">black / medium</option>
                                                                        <option value="3947629955">white / medium</option>
                                                                    </select>
                                                                </div>
                                                                <div class="effect-ajax-cart">
                                                                    <input name="quantity" value="1" type="hidden">
                                                                    <a href="<?php echo 'productdetail.php?pro_id=' . $row['product_id']; ?>"><button class="select-option" type="button"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button></a>
                                                                </div>        
                                                            </form>
                                                            <div class="product-ajax-qs hidden-xs hidden-sm">
                                                                <div data-handle="maximus-quam-posuere-1" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                    <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
                                                                    <span class="product-json hide">{"id":1293227907,"title":"Maximus quam posuere","handle":"maximus-quam-posuere-1","description":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e","published_at":"2015-06-29T00:22:05-04:00","created_at":"2015-06-29T00:22:06-04:00","vendor":"Vendor 3","type":"Sweaters Wear","tags":["Best Seller","Sale Off"],"price":20000,"price_min":20000,"price_max":20000,"available":true,"price_varies":false,"compare_at_price":30000,"compare_at_price_min":30000,"compare_at_price_max":30000,"compare_at_price_varies":false,"variants":[{"id":3947629763,"title":"black \/ small","option1":"black","option2":"small","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566019,"product_id":1293227907,"position":1,"created_at":"2015-06-29T03:11:53-04:00","updated_at":"2015-06-29T03:11:53-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","variant_ids":[3947629763,3947629891]},"available":true,"name":"Maximus quam posuere - black \/ small","public_title":"black \/ small","options":["black","small"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629827,"title":"white \/ small","option1":"white","option2":"small","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566339,"product_id":1293227907,"position":2,"created_at":"2015-06-29T03:11:54-04:00","updated_at":"2015-06-29T03:11:54-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914","variant_ids":[3947629827,3947629955]},"available":true,"name":"Maximus quam posuere - white \/ small","public_title":"white \/ small","options":["white","small"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629891,"title":"black \/ medium","option1":"black","option2":"medium","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566019,"product_id":1293227907,"position":1,"created_at":"2015-06-29T03:11:53-04:00","updated_at":"2015-06-29T03:11:53-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","variant_ids":[3947629763,3947629891]},"available":true,"name":"Maximus quam posuere - black \/ medium","public_title":"black \/ medium","options":["black","medium"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":3947629955,"title":"white \/ medium","option1":"white","option2":"medium","option3":null,"sku":null,"requires_shipping":true,"taxable":true,"featured_image":{"id":2792566339,"product_id":1293227907,"position":2,"created_at":"2015-06-29T03:11:54-04:00","updated_at":"2015-06-29T03:11:54-04:00","width":800,"height":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914","variant_ids":[3947629827,3947629955]},"available":true,"name":"Maximus quam posuere - white \/ medium","public_title":"white \/ medium","options":["white","medium"],"price":20000,"weight":0,"compare_at_price":30000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/11_11ac0177-cd42-4bfc-b610-df79b9a60afb.jpg?v=1435561914"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/10_16854be2-a731-4970-984e-7f6e483d2405.jpg?v=1435561913","options":["Color","Size"],"content":"\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e"}</span>
                                                                </div>
                                                            </div>
                                                            <a class="wish-list" href="<?php echo 'wishlist.php?pro_id=' . $row['product_id']; ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                            
                                                        </div>
                                                        
                                                    </li>
                                                </ul> 
                                            </div>
                                    
                           		
				
        <?php
                                                        
                                                        }
                                                }
                                                
        ?>
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
   
<?php include('./footer.php'); ?>

    
               