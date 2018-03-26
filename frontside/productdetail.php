<?php include('./header.php'); ?>
<?php

include('../config.php');
if (isset($_POST['submit'])) {
    $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';
    if ($customer_id == '') {
        echo '<script>window.location = "loginform.php";</script>';
    }
    $pro_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $product_description = $_POST['product_description'];
     $sql1 = "SELECT * FROM `cart` where customer_id=$customer_id && product_id=$pro_id";
   $result1 =  mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($result1);
if ($count > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            $quantity = $row['quantity'] + $quantity;
            $cart_id = $row['cart_id'];
            $product_description = $row['product_description'];
            $sql = "update `cart` set quantity=$quantity where cart_id=$cart_id";
            if (mysqli_query($conn, $sql)) {
                
            } else {
                
            }
        }
        
    } else {
        $sql = "INSERT INTO `cart` (`cart_id`, `customer_id`, `product_id`, `quantity`) VALUES ( NULL ,'" . $customer_id . "','" . $_POST['product_id'] . "', '" . $_POST['quantity'] . "')";
        if (mysqli_query($conn, $sql)) {
            
        } else {
            
        }
    }

    //redirect userdetail form
    //header("Location:loginform.php");
} else {
    //redirect userdetail form
    //header("Location:addproduct.php");
}
?>
<div id="content-wrapper-parent">
    <div id="content-wrapper">    
        <!-- Content -->
        <div id="content" class="clearfix">        

            <div id="breadcrumb" class="breadcrumb">
                <div itemprop="breadcrumb" class="container">
                    <div class="row">

                    </div>
                </div>
            </div>              
            <section class="content">      
                <div class="container">
                    <div class="row">           
                        <div id="col-main" class="product-page col-xs-24 col-sm-24 ">
                            <div itemscope itemtype="http://schema.org/Product">
                                <meta itemprop="url" content="" />

                                <div id="product" class="content clearfix">
                                    <form method="post">
                                        <?php
                                      //database connection
                                        include('../config.php');
                                        $product_id = isset($_GET['pro_id']) ? $_GET['pro_id'] : '';

                                        $subcategory_id = isset($_GET['subcat_id']) ? $_GET['subcat_id'] : '';


                                        if ($subcategory_id != '') {
                                            $data = "SELECT * FROM product where pro_id=$product_id && subcategory_id=$subcategory_id ";
                                        }
//echo '<pre>'; print_r($data);die();  
                                        else {
                                            $data = "SELECT * FROM product where product_id=$product_id ";
                                        }
// $data = "SELECT status FROM product where status='inactive'"
//               $data = "SELECT product_name,image FROM product where product_name ='ring'";  
//                $data = "SELECT product.subcategory_id, subcategory.subcategory_name, product.product_name FROM product INNER JOIN subcategory ON product.subcategory_id=subcategory.subcategory_id;";
                                        $result = $conn->query($data);
// echo "<pre>"; print_r($result);die();
                                        while ($row = mysqli_fetch_array($result)) {
                                            if (file_exists($row["image"])) {

                                                $path = '../product/' . $row["image"];
                                            } else {
                                                $path = 'product/picture/noimage.jpg';
                                            }
//                echo "<pre>"; print_r($path);die();             
                                            ?>
                                            <h1 id="page-title" class="text-center">
                                                <span itemprop="name"><?php echo $row['product_name'] ?></span>
                                            </h1>
                                            <div id="product-image" class="product-image row ">
                                                <input type="hidden" value="<?php echo $row['product_id']; ?>">
                                                <div id="detail-left-column" class="hidden-xs left-coloum col-sm-6 col-sm-6 not-animated" data-animate="fadeInRight">
                                                    <div id="gallery_main" class="product-image-thumb thumbs full_width ">
                                                        <ul class="slide-product-image">

                                                            <li class="image">
                                                                <a href="<?php echo $path ?>" class="cloud-zoom-gallery active" alt="Donec justo condimentum">
                                                                    <img src="<?php echo $path ?>" alt="Donec justo condimentum" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="image featured col-smd-12 col-sm-12 not-animated" data-animate="fadeInUp">      
                                                    <a href="<?php echo $path ?>" class="container_item">  
                                                        <!--<div class="mousetrap" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wDCQgqN0pFezEAAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAAADUlEQVQI12NgYGBgAAAABQABXvMqOgAAAABJRU5ErkJggg==&quot;); z-index: 999; position: absolute; width: 418px; height: 418px; left: 0px; top: 0px; cursor: pointer;"></div>-->
                                                        <img src='<?php echo $path ?>' height='400px' width='50px'>
                                                    </a>
                                                    <span></span>
                                                </div>   
                                                <div id="detail-right-column" class="right-coloum col-sm-6 not-animated" data-animate="fadeInLeft">
                                                    <script type="">   </script>
                                                    <div class="addthis_sharing_toolbox"></div>

                                                </div>
                                            </div>
                                            <div>
                                                <div id="info-left" class="breadcrumb" style="display: none">
                                                    <!--<div itemprop="breadcrumb" class="container">-->
                                                    <div class="info-left">
                                                        <center>
                                                            <?php
                                                            if (isset($_SESSION['scmsg'])) {
                                                                echo $_SESSION['scmsg'];
                                                            }
                                                            ?></center>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div id="product-information" class="product-information row text-center ">

                                    <div id="product-header" class="clearfix">
                                        <div id="product-info-left">
                                             <div class="description">
                                           
                                                        <div class="header">Product Descriptions</div>
                                                        <label class="wrapper-title"><?php echo $row['product_description'] ?></label>

                                                    </div>                                                                                       
                                        </div>
                                        <div id="product-info-right">     
                                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
                                                <meta itemprop="priceCurrency" content="USD" />              
                                                <link itemprop="availability" href="http://schema.org/InStock" />


                                                <div class="box-body">
                                                    <input type="hidden" name="pro_id" value="<?php echo $product_id; ?>">
                                                    <div id="product-actions-1293232771" class="options clearfix"></div>

                                                    <div class="swatch color clearfix" data-option-index="0">
                                                        <div class="header">Carat</div>
                                                        <label class="wrapper-title"><?php echo $row['carat'] ?></label>

                                                    </div>

                                                    <div class="swatch clearfix" data-option-index="1">
                                                        <div class="header">Weight</div>
                                                        <label class="wrapper-title"><?php echo $row['weight'] ?></label>
                                                    </div>                          


                                                    <div class="quantity-wrapper clearfix">
                                                        <label class="wrapper-title">Quantity</label>
                                                        <div class="wrapper">
                                                             <script type="text/javascript">
                                                              function subtractQty(){
                                                              if(document.getElementById("qty").value - 1 < 0)
                                                               return;
                                                               else
                                                                  document.getElementById("qty").value--;
                                                                }
                                                            </script>
                                                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">                    
                                                            <input type='text' name='quantity' id='qty' />

                                                            <input type='button' name='add' onclick='javascript:document.getElementById("qty").value++;' value='+'/> 
                                                             <input type='button' name='subtract' onclick='javascript: subtractQty();' value='-'/>
                                                            <!--<input type='button' name='subtract' onclick='javascript: document.getElementById("qty").value--;' value='-'/>--> 
                                                        </div>
                                                    </div>


                                                    <div id="purchase-1293232771">
                                                        <div class="detail-price" itemprop="price">
                                                            <span class='money'><?php echo $row['price'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="others-bottom clearfix">
                                                        <button  class="btn btn-1" type=" submit" name="submit" onclick="show_message()">Add to Cart</button>

                                                    </div>

                                                </div>
                                                <div class="wls">
                                                    <a class="wish-list" href="<?php echo 'wishlist.php?pro_id=' . $row['product_id']; ?>"<i class="fa fa-heart"></i> Wish list</a>
                                                    <!--<span>|</span>-->
                                                    <!--<a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> SEND EMAIL</a>-->
                                                </div>

                                            </div>
                                            <script type="text/javascript">
                                                function show_message()
                                                {
                                                    $('#info-left').show();
                                                    setTimeout(function () {
                                                        $('#info-left').hide();
                                                    }, 3000);


                                                }

                                                // initialize multi selector for product
                                                $(window).load(function () {

                                                    /* selectCallback */
                                                    var selectOptionsCallback = function (variant, selector) {

                                                        if (variant) {
                                                            var form = jQuery('#' + selector.domIdPrefix).closest('form');
                                                            for (var i = 0, length = variant.options.length; i < length; i++) {
                                                                var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                                                                if (radioButton.size()) {
                                                                    radioButton.get(0).checked = true;
                                                                }
                                                            }
                                                        }

                                                        if (variant && variant.featured_image) {
                                                            var newImage = variant.featured_image; // New image object.
                                                            var mainImageDomEl = jQuery('.featured img')[0]; // DOM element of main image we need to swap.
                                                            Shopify.Image.switchImage(newImage, mainImageDomEl, switchImage); // Define switchImage (the callback) in your theme's JavaScript file.
                                                        }

                                                        var add_to_cart = '#add-to-cart';
                                                        var $price = '#purchase-' + selector.product.id.toString() + ' .detail-price';
                                                        if (variant && variant.available) {
                                                            // selected a valid variant
                                                            $(add_to_cart).removeClass('disabled').removeAttr('disabled'); // remove unavailable class from add-to-cart button, and re-enable button

                                                            if (variant.compare_at_price == null) {
                                                                $($price).html('<span class="price">' + Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span>');


                                                                /* Update currency */
                                                                currenciesCallbackSpecial('#product-information span.money');

                                                            } else {
                                                                $($price).html('<span class="price_sale">' + Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span> <span class="dash">/</span> <del class="price_compare">' + Shopify.formatMoney(variant.compare_at_price, "<span class='money'>${{amount}}</span>") + '</del>');


                                                                /* Update currency */
                                                                currenciesCallbackSpecial('#product-information span.money');

                                                            }
                                                        } else {
                                                            $(add_to_cart).addClass('disabled').attr('disabled', 'disabled'); // set add-to-cart button to unavailable class and disable button
                                                            var message = variant ? "Sold Out" : "Unavailable";
                                                            $($price).html('<span class="unavailable">' + message + '</span>');
                                                        }
                                                    };

                                                    new Shopify.OptionSelectors("product-select-1293232771", {product: {"id": 1293232771, "title": "Donec justo condimentum", "handle": "donec-justo-condimentum", "description": "\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e", "published_at": "2015-06-29T00:22:00-04:00", "created_at": "2015-06-29T00:22:17-04:00", "vendor": "Vendor 3", "type": "Dressing", "tags": ["$100 - $200", "Red", "S", "Sale Off"], "price": 20000, "price_min": 20000, "price_max": 20000, "available": true, "price_varies": false, "compare_at_price": null, "compare_at_price_min": 0, "compare_at_price_max": 0, "compare_at_price_varies": false, "variants": [{"id": 3947639491, "title": "black \/ small", "option1": "black", "option2": "small", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792372867, "product_id": 1293232771, "position": 1, "created_at": "2015-06-29T03:07:07-04:00", "updated_at": "2015-06-29T03:07:07-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/6_e3262113-c6c2-4c85-b20a-56b61f779815.jpg?v=1435561627", "variant_ids": [3947639491, 3947639747]}, "available": true, "name": "Donec justo condimentum - black \/ small", "public_title": "black \/ small", "options": ["black", "small"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 0, "inventory_management": null, "inventory_policy": "deny", "barcode": null}, {"id": 3947639555, "title": "blue \/ small", "option1": "blue", "option2": "small", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792372995, "product_id": 1293232771, "position": 2, "created_at": "2015-06-29T03:07:08-04:00", "updated_at": "2015-06-29T03:07:08-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/7_d9b47cc7-4baa-42fc-b8b7-a7a623f988f8.jpg?v=1435561628", "variant_ids": [3947639555, 3947639811]}, "available": true, "name": "Donec justo condimentum - blue \/ small", "public_title": "blue \/ small", "options": ["blue", "small"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 1, "inventory_management": null, "inventory_policy": "deny", "barcode": null}, {"id": 3947639619, "title": "white \/ small", "option1": "white", "option2": "small", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792373251, "product_id": 1293232771, "position": 3, "created_at": "2015-06-29T03:07:09-04:00", "updated_at": "2015-06-29T03:07:09-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/8.jpg?v=1435561629", "variant_ids": [3947639619, 3947639875]}, "available": true, "name": "Donec justo condimentum - white \/ small", "public_title": "white \/ small", "options": ["white", "small"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 1, "inventory_management": null, "inventory_policy": "deny", "barcode": null}, {"id": 3947639683, "title": "red \/ small", "option1": "red", "option2": "small", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792373443, "product_id": 1293232771, "position": 4, "created_at": "2015-06-29T03:07:10-04:00", "updated_at": "2015-06-29T03:07:10-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/9.jpg?v=1435561630", "variant_ids": [3947639683]}, "available": true, "name": "Donec justo condimentum - red \/ small", "public_title": "red \/ small", "options": ["red", "small"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 1, "inventory_management": null, "inventory_policy": "deny", "barcode": null}, {"id": 3947639747, "title": "black \/ large", "option1": "black", "option2": "large", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792372867, "product_id": 1293232771, "position": 1, "created_at": "2015-06-29T03:07:07-04:00", "updated_at": "2015-06-29T03:07:07-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/6_e3262113-c6c2-4c85-b20a-56b61f779815.jpg?v=1435561627", "variant_ids": [3947639491, 3947639747]}, "available": true, "name": "Donec justo condimentum - black \/ large", "public_title": "black \/ large", "options": ["black", "large"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 1, "inventory_management": null, "inventory_policy": "deny", "barcode": null}, {"id": 3947639811, "title": "blue \/ large", "option1": "blue", "option2": "large", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792372995, "product_id": 1293232771, "position": 2, "created_at": "2015-06-29T03:07:08-04:00", "updated_at": "2015-06-29T03:07:08-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/7_d9b47cc7-4baa-42fc-b8b7-a7a623f988f8.jpg?v=1435561628", "variant_ids": [3947639555, 3947639811]}, "available": true, "name": "Donec justo condimentum - blue \/ large", "public_title": "blue \/ large", "options": ["blue", "large"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 1, "inventory_management": null, "inventory_policy": "deny", "barcode": null}, {"id": 3947639875, "title": "white \/ large", "option1": "white", "option2": "large", "option3": null, "sku": "", "requires_shipping": true, "taxable": true, "featured_image": {"id": 2792373251, "product_id": 1293232771, "position": 3, "created_at": "2015-06-29T03:07:09-04:00", "updated_at": "2015-06-29T03:07:09-04:00", "width": 800, "height": 800, "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/8.jpg?v=1435561629", "variant_ids": [3947639619, 3947639875]}, "available": true, "name": "Donec justo condimentum - white \/ large", "public_title": "white \/ large", "options": ["white", "large"], "price": 20000, "weight": 0, "compare_at_price": null, "inventory_quantity": 1, "inventory_management": null, "inventory_policy": "deny", "barcode": null}], "images": ["\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/6_e3262113-c6c2-4c85-b20a-56b61f779815.jpg?v=1435561627", "#\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/7_d9b47cc7-4baa-42fc-b8b7-a7a623f988f8.jpg?v=1435561628", "#\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/8.jpg?v=1435561629", "\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/9.jpg?v=1435561630"], "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0908\/7252\/products\/6_e3262113-c6c2-4c85-b20a-56b61f779815.jpg?v=1435561627", "options": ["Color", "Size"], "content": "\u003cp\u003eNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.\u003c\/p\u003e\n\u003cp\u003eTemporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aliquid ex ea commodi consequatur.\u003c\/p\u003e"}, onVariantSelected: selectOptionsCallback, enableHistoryState: true});

                                                    $('.single-option-selector').customStyle();

                                                    // Add label if only one product option and it isn't 'Title'.


                                                    // Auto-select first available variant on page load.





                                                    $('.single-option-selector:eq(0)').val("black").trigger('change');

                                                    $('.single-option-selector:eq(1)').val("small").trigger('change');

                                                });
                                            </script>



                                            <ul id="tabs_detail" class="tabs-panel-detail hidden-xs hidden-sm">

                                                <!--<li class="first"><h5><a href="#pop-one" class="fancybox">Measurements &amp; Specs</a></h5></li>-->


                                                <!--<li><h5><a href="#pop-two" class="fancybox">Shipping & Returns</a></h5></li>-->


                                                <!--<li><h5><a href="#pop-three" class="fancybox">Size Charts</a></h5></li>-->

                                            </ul>
<!--
                                            <div id="pop-one" style="display: none;">
                                                <img src=cdn.shopify.com/s/files/1/0908/7252/t/2/assets/mspecs_imagef4b4.jpg?1309057467802046266 alt="" />
                                            </div>
                                            <div id="pop-two" style="display: none;">
                                                <h5>Returns Policy</h5><p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.</p><br/><h5>Shipping</h5><p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.</p>
                                            </div>
                                            <div id="pop-three" style="display: none;">
                                                <img src=cdn.shopify.com/s/files/1/0908/7252/t/2/assets/size_chart_imagef4b4.jpg?1309057467802046266 alt="" />
                                            </div>-->

                                        </div>        
                                    </div>
                                </div>
                                <?php
                            }
                            $conn->close();
                            ?>
                            </form>

<!--                            <div id="shopify-product-reviews" data-id="1293232771"><style scoped>.spr-container {
                                        padding: 24px;
                                        border-color: #ECECEC;}
                                    .spr-review, .spr-form {
                                        border-color: #ECECEC;
                                    }
                                </style>
                              
                            </div>-->
                        </div>

                    </div>

                    <!-- Related Products -->

                    <!-- Beneath Products -->

                </div>

                <script>
                    $(window).scroll(function () {
                        if ($(window).innerWidth() >= 768) {
                            var scrollbar = jQuery('#detail-left-column');
                            var scrolltop = jQuery(window).scrollTop();

                            if (scrolltop > jQuery(scrollbar).parent().offset().top) {
                                if ((scrolltop + jQuery(scrollbar).height()) <= (jQuery(scrollbar).parent().offset().top + jQuery(scrollbar).parent().height())) {
                                    jQuery(scrollbar).animate({top: (jQuery(window).scrollTop() - jQuery(scrollbar).parent().offset().top) + "px"}, {queue: false, easing: 'swing', duration: 700});
                                } else {
                                    var i = (jQuery(scrollbar).parent().height() - jQuery(scrollbar).height()) + 7 + "px";
                                    jQuery(scrollbar).animate({top: i}, {queue: false, easing: 'swing', duration: 1000});
                                }
                            } else if (scrolltop < (jQuery(scrollbar).parent().offset().top)) {
                                jQuery(scrollbar).animate({top: "0px"}, {queue: false, easing: 'swing', duration: 1000});
                            }
                            var scrollbar2 = jQuery('#detail-right-column');
                            if (scrolltop > jQuery(scrollbar2).parent().offset().top) {
                                if ((scrolltop + jQuery(scrollbar2).height() - 7) <= (jQuery(scrollbar2).parent().offset().top + jQuery(scrollbar2).parent().height())) {
                                    jQuery(scrollbar2).animate({top: (jQuery(window).scrollTop() - jQuery(scrollbar2).parent().offset().top) + "px"}, {queue: false, easing: 'swing', duration: 700});
                                } else {
                                    var i = (jQuery(scrollbar2).parent().height() - jQuery(scrollbar2).height()) + "px";
                                    jQuery(scrollbar2).animate({top: i}, {queue: false, easing: 'swing', duration: 1000});
                                }
                            } else if (scrolltop < (jQuery(scrollbar2).parent().offset().top)) {
                                jQuery(scrollbar2).animate({top: "0px"}, {queue: false, easing: 'swing', duration: 1000});
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

<script type="text/javascript">
    //<![CDATA[    
    // Including api.jquery.js conditionnally.
    if (typeof Shopify.onCartShippingRatesUpdate === 'undefined') {
        document.write("\u003cscript src=\"\/\/cdn.shopify.com\/s\/assets\/themes_support\/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js\" type=\"text\/javascript\"\u003e\u003c\/script\u003e");
    }
    //]]>
</script>   
<script type="text/javascript">
    Shopify.updateCartInfo = function (cart, cart_summary_id, cart_count_id) {
        if ((typeof cart_summary_id) === 'string') {
            var cart_summary = jQuery(cart_summary_id);
            if (cart_summary.length) {
                // Start from scratch.
                cart_summary.empty();
                // Pull it all out.

                jQuery.each(cart, function (key, value) {
                    if (key === 'items') {


                        if (value.length) {

                            jQuery('<div class="items control-container"></div>').appendTo(cart_summary);
                            var table = jQuery(cart_summary_id + ' div.items');

                            jQuery.each(value, function (i, item) {
                                jQuery('<div class="row items-wrapper"><a class="cart-close" title="Remove" href="javascript:void(0);" onclick="Shopify.removeItem(' + item.variant_id + ')"><i class="fa fa-times"></i></a><div class="col-md-8 cart-left"><a class="cart-image" href="' + item.url + '"><img src="' + Shopify.resizeImage(item.image, 'small') + '" alt="" title=""/></a></div><div class="col-md-16 cart-right"><div class="cart-title"><a href="' + item.url + '">' + item.title + '</a></div><div class="cart-price">' + Shopify.formatMoney(item.price, "<span class='money'>${{amount}}</span>") + '<span class="x"> x </span>' + item.quantity + '</div></div></div>').appendTo(table);
                            });

                            jQuery('<div class="subtotal"><span>Subtotal:</span><span class="cart-total-right">' + Shopify.formatMoney(cart.total_price, "<span class='money'>${{amount}}</span>") + '</span></div>').appendTo(cart_summary);
                            jQuery('<div class="action"><button class="btn" onclick="window.location=\'/checkout\'">CHECKOUT</button><a class="btn btn-1" href="/cart\">View Cart</button></a></div>').appendTo(cart_summary);


                        } else {
                            jQuery('<div class="empty text-center"><em>Your shopping cart is empty.. <a href="/collections/all" class="btn">Continue Shopping</a></em></div>').appendTo(cart_summary);
                        }
                    }
                });
            }
        }
        // Update cart count.
        if ((typeof cart_count_id) === 'string') {
            if (cart.item_count == 0) {
                jQuery('#' + cart_count_id).html('your cart is empty');
            } else if (cart.item_count == 1) {
                jQuery('#' + cart_count_id).html('1 item in your cart');
            } else {
                jQuery('#' + cart_count_id).html(cart.item_count + ' items in your cart');
            }
        }

        /* Update cart info */
        updateCartDesc(cart);
    };

    function updateCartDesc(data) {
        var $cartLinkText = $('.cart-link .icon:first .number');
        switch (data.item_count) {
            case 0:
                $cartLinkText.html('0');
                break;
            case 1:
                $cartLinkText.html('1');
                break;
            default:
                $cartLinkText.html(data.item_count);
                break;
        }
        var $cartPrice = '<span class="total"> - ' + Shopify.formatMoney(data.total_price, "<span class='money'>${{amount}}</span>") + '</span>';

        /* Update currency */
        currenciesCallbackSpecial('#umbrella span.money');
        Shopify.onCartUpdate = function (cart) {
            Shopify.updateCartInfo(cart, '#cart-info #cart-content', 'shopping-cart');
        };

        $(window).load(function () {
            // Let's get the cart and show what's in it in the cart box.	
            Shopify.getCart(function (cart) {

                Shopify.updateCartInfo(cart, '#cart-info #cart-content');
            });
        });
</script>
<div id="quick-shop-modal" class="modal" role="dialog" aria-hidden="true" tabindex="-1" data-width="800">
    <div class="modal-dialog rotateInDownLeft">
        <div class="modal-content">
            <div class="modal-header">
                <i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal" aria-hidden="true"></i>
            </div>
            <div class="modal-body">
                <div class="quick-shop-modal-bg"></div>
                <div class="row">

                    <div class="col-md-12 product-image">
                        <div id="quick-shop-image" class="product-image-wrapper"></div>
                    </div>

                    <div class="col-md-12 product-information">

                        <h1 id="quick-shop-title"></h1>

                        <div id="quick-shop-infomation" class="description">
                            <div id="quick-shop-description" class="text-left"></div>
                        </div>

                        <div id="quick-shop-container">

                            <div id="quick-shop-relative" class="relative text-left">
                                <ul class="list-unstyled">
                                    <li class="control-group vendor">
                                        <span class="control-label">Vendor :</span>
                                    </li>
                                    <li class="control-group type">
                                        <span class="control-label">Type :</span>
                                    </li>
                                </ul>
                            </div> 



                            <div id="quick-shop-price-container" class="detail-price"></div>



                            <div id="quick-shop-variants-container" class="variants-wrapper"></div>

                            <div class="others-bottom">
                                <input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="Add to Cart" />
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php
                                //database connection
                                include('../config.php');
                                if (isset($_POST['submit1'])) {
                                //data listing 
//                                $data = "select * from cart ORDER BY (cart_id) DESC ";
                                   $customer_id = isset($_SESSION['data']['customer_id'])?$_SESSION['data']['customer_id']:'';
                                   $product_id = isset($_REQUEST['pro_id'])?$_REQUEST['pro_id']:'';
                                   $review = isset($_REQUEST['review'])?$_REQUEST['review']:'';
//                                   $review = $_POST['review'];
                                   if ($customer_id > 0) {
//                                        echo "<pre>"; print_r($data);die();
                                       $data1= "INSERT INTO `feedback` (`product_id`,`customer_id`,`review`) VALUES ('" . $product_id . "','" . $customer_id . "','" . $review . "')";
//                                        $data1 "INSERT INTO `feedback` (`product_id`, `customer_id`, `review`) VALUES ('" . $_POST['product_id'] . "', '" . $_POST['customer_id'] . "', '" . $_POST['review'] . "')";
                                       if ($conn->query($data1)) {
                                          
        //                                                echo "New record created successfully";
                                                    } else {
                                                       

                                                       

                                                    } 
                                       
                                   }
                                   else{
                                        echo '<script>window.location = "loginform.php";</script>';
                                       
                                   }
//                                   
                                }
                                 ?>

<div class="container">
  <!--<h2>customer review</h2>-->
  <form method="post" accept-charset="utf-8">
      <input type="hidden" value="<?php echo $row['product_id']; ?>">
    <fieldset><legend>Review This Product</legend>	
<!--    <p><label for="rating">Rating</label><input type="radio" name="rating"
      value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
      <input type="radio" name="rating" value="3" /> 3 <input type="radio"
      name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1</p>-->
        
    <p><textarea name="review" rows="8" cols="40">
       </textarea></p>
       
      
    <p><input type="submit" name="submit1" value="Submit"></p>
    <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
    <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
</fieldset>
</form>

<!--  <form>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </form>-->
</div>

<script type="text/javascript">

        jQuery(document).ready(function ($) {

            $('#quick-shop-modal').on('hidden.bs.modal', function () {
                $('.zoomContainer').css('z-index', '1');
                $('#top').removeClass('z-idx');
            })

            $('#quick-shop-modal').on('shown.bs.modal', function () {
                $('#top').addClass('z-idx');
                $('.modal-dialog').addClass("animated");
                imagesLoaded('#quick-shop-modal', function () {

                    updateScrollThumbsQS();

                    $("#gallery_main_qs").show().owlCarousel({
                        navigation: true,
                        pagination: false,
                        items: 4,
                        itemsDesktop: [1199, 4],
                        itemsDesktopSmall: [979, 3],
                        itemsTablet: [768, 3],
                        itemsMobile: [479, 2],
                        scrollPerPage: true,
                        navigationText: ['<span class="btooltip" title="Previous"></span>', '<span class="btooltip" title="Next"></span>']
                    });

                    var delayLoadingQS = '';
                    delayLoadingQS = setInterval(function () {

                        quickShopModalBackground.hide();
                        $('.zoomContainer').css('z-index', '2000');
                        $('#quick-shop-modal .modal-body').resize();

                        clearInterval(delayLoadingQS);
                    }, 500);
                });

            });

            var quickShopModal = $('#quick-shop-modal');
            var quickShopContainer = $('#quick-shop-container');
            var quickShopImage = $('#quick-shop-image');
            var quickShopTitle = $('#quick-shop-title');
            var quickShopDescription = $('#quick-shop-description');
            var quickShopRelative = $('#quick-shop-relative');
            var quickShopVariantsContainer = $('#quick-shop-variants-container');
            var quickShopPriceContainer = $('#quick-shop-price-container');
            var quickShopAddButton = $('#quick-shop-add');
            var quickShopAddToCartButton = $('#quick-shop-add');
            var quickShopProductActions = $('#quick-shop-product-actions');
            var quickShopModalBackground = $('#quick-shop-modal .quick-shop-modal-bg');

            $('body').on(clickEv, '.quick_shop:not(.unavailable)', function (event) {
                var quickShopImage = $('#quick-shop-image');

                var $this = $(this);
                var product_json = $this.find('.product-json').html();

                // Grab product data
                var selectedProduct = JSON.parse(product_json);
                var selectedProductID = selectedProduct.id;
                // Update add button
                quickShopAddButton.data('product-id', selectedProductID);

                // Update image
                quickShopImage.empty();
                quickShopImage.html('<a class="main-image"><img class="img-zoom img-responsive image-fly" src="' + Shopify.resizeImage(selectedProduct.featured_image, "grande") + '" data-zoom-image="' + selectedProduct.featured_image + '" alt="" /></a>');

                var qs_images_size = "";
                if (selectedProduct.images.length < 4)
                    qs_images_size = "small-thumbs";

                quickShopImage.append('<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini ' + qs_images_size + '"></div>');

                var qs_images = selectedProduct.images;
                $.each(qs_images, function (index, value) {
                    if (index)
                        quickShopImage.find('#gallery_main_qs').append('<a class="image-thumb" href="' + value + '" alt="" data-image="' + Shopify.resizeImage(value, 'grande') + '" data-zoom-image="' + Shopify.resizeImage(value, 'original') + '"><img src="' + Shopify.resizeImage(value, "compact") + '" alt="" /></a>');
                    else
                        quickShopImage.find('#gallery_main_qs').append('<a class="image-thumb active" href="' + value + '" alt="" data-image="' + Shopify.resizeImage(value, 'grande') + '" data-zoom-image="' + Shopify.resizeImage(value, 'original') + '"><img src="' + Shopify.resizeImage(value, "compact") + '" alt="" /></a>');
                });

                // Update title
                quickShopTitle.html('<span href="/products/' + selectedProduct.handle + '">' + selectedProduct.title + '</span>');

                // Update description
                var desc = selectedProduct.description.substr(0, 370) + "...";
                quickShopDescription.html(desc);

                // Update relative
                quickShopRelative.find('a').remove();

                quickShopRelative.find('.vendor .control-label').after('<a href="/collections/vendors?q=' + selectedProduct.vendor.replace(' ', '+') + '"> ' + selectedProduct.vendor + '</a>');
                quickShopRelative.find('.type .control-label').after('<a href="/collections/types?q=' + selectedProduct.type.replace(' ', '+') + '"> ' + selectedProduct.type + '</a>');

                // Generate variants
                var productVariants = selectedProduct.variants;
                var productVariantsCount = productVariants.length;

                quickShopPriceContainer.html('');
                quickShopVariantsContainer.html('');
                quickShopAddToCartButton.removeAttr('disabled').fadeTo(200, 1);

                if (productVariantsCount > 1) {

                    // Reveal variants container
                    quickShopVariantsContainer.show();

                    // Build variants element
                    var quickShopVariantElement = $('<select>', {'id': ('#quick-shop-variants-' + selectedProductID), 'name': 'id'});
                    var quickShopVariantOptions = '';

                    for (var i = 0; i < productVariantsCount; i++) {
                        quickShopVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
                    }
                    ;

                    // Add variants element to page
                    quickShopVariantElement.append(quickShopVariantOptions);
                    quickShopVariantsContainer.append(quickShopVariantElement);

                    // Bind variants to OptionSelect JS
                    new Shopify.OptionSelectors(('#quick-shop-variants-' + selectedProductID), {product: selectedProduct, onVariantSelected: selectOptionCallback});

                    // Add label if only one product option and it isn't 'Title'.
                    if (selectedProduct.options.length == 1 && selectedProduct.options[0] != 'Title') {
                        $('#quick-shop-product-actions .selector-wrapper:eq(0)').prepend('<label>' + selectedProduct.options[0] + '</label>');
                    }

                    // Auto-select first available variant on page load.
                    var found_one_in_stock = false;
                    for (var i = 0; i < selectedProduct.variants.length; i++) {

                        var variant = selectedProduct.variants[i];
                        if (variant.available && found_one_in_stock == false) {

                            found_one_in_stock = true;
                            for (var j = 0; j < variant.options.length; j++) {

                                $('.single-option-selector:eq(' + j + ')').val(variant.options[j]).trigger('change');

                            }
                        }
                    }

                    $('#quick-shop-variants-container .single-option-selector').customStyle();

                } else { // If product only has a single variant

                    // Hide unnecessary variants container
                    quickShopVariantsContainer.hide();

                    // Build variants element
                    var quickShopVariantElement = $('<select>', {'id': ('#quick-shop-variants-' + selectedProductID), 'name': 'id'});
                    var quickShopVariantOptions = '';

                    for (var i = 0; i < productVariantsCount; i++) {
                        quickShopVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
                    }
                    ;

                    // Add variants element to page
                    quickShopVariantElement.append(quickShopVariantOptions);
                    quickShopVariantsContainer.append(quickShopVariantElement);


                    // Update the add button to include correct variant id
                    quickShopAddToCartButton.data('variant-id', productVariants[0].id);

                    // Determine if product is on sale
                    if (productVariants[0].compare_at_price > 0 && productVariants[0].compare_at_price > productVariants[0].price) {
                        quickShopPriceContainer.html('<del class="price_compare">' + Shopify.formatMoney(productVariants[0].compare_at_price, "<span class='money'>${{amount}}</span>") + '</del>' + '<span class="price_sale">' + Shopify.formatMoney(productVariants[0].price, "<span class='money'>${{amount}}</span>") + '</span>');
                    } else {
                        quickShopPriceContainer.html('<span class="price">' + Shopify.formatMoney(productVariants[0].price, "<span class='money'>${{amount}}</span>") + '</span>');
                    }

                } // END of (productVariantsCount > 1)


                // Update currency
                currenciesCallbackSpecial('#quick-shop-modal span.money');


            });

            /* selectOptionCallback
             ===================================== */
            var selectOptionCallback = function (variant, selector) {

                // selected a valid and in stock variant
                if (variant && (variant.inventory_quantity > 0 || (variant.inventory_quantity <= 0 && variant.inventory_policy == 'continue'))) {

                    quickShopAddToCartButton.data('variant-id', variant.id);


                    quickShopAddToCartButton.removeAttr('disabled').fadeTo(200, 1);

                    // determine if variant is on sale
                    if (variant.compare_at_price > 0 && variant.compare_at_price > variant.price) {
                        quickShopPriceContainer.html('</del>' + '<span class="price_sale">' + Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span><span class="dash">/</span><del class="price_compare">' + Shopify.formatMoney(variant.compare_at_price, "<span class='money'>${{amount}}</span>"));
                    } else {
                        quickShopPriceContainer.html('<span class="price">' + Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span>');
                    }
                    ;

                    // selected an invalid or out of stock variant 
                } else {
                    // variant doesn't exist
                    quickShopAddToCartButton.attr('disabled', 'disabled').fadeTo(200, 0.5);
                    var message = variant ? "Sold Out" : "Unavailable";
                    quickShopPriceContainer.html('<span class="unavailable">' + message + '</span>');

                }


                // Update currency
                currenciesCallbackSpecial('#quick-shop-modal span.money');

            }

        });
</script>
<script type="text/javascript">

        jQuery('.currencies li').on(clickEv, function () {
            if (!$(this).hasClass('active')) {
                jQuery('.currencies li').removeClass('active');
                var cls = jQuery(this).attr('class');
                jQuery('.' + cls).addClass('active');

                var selectedValue = jQuery(this).find('input[type=hidden]').val();
                jQuery('.currencies_src option[value=' + selectedValue + ']').attr('selected', true);
                jQuery('.currencies_src').change();
                jQuery('.currency').removeClass('open');
            }
        });

        var shopCurrency = '',
                defaultCurrency = '',
                cookieCurrency = '';
        currenciesCallback();

        function currenciesCallback() {

            Currency.format = 'money_format';


            shopCurrency = 'USD';

            /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
            Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
            Currency.money_format[shopCurrency] = "${{amount}}";

            /* Default currency */
            defaultCurrency = 'USD' || shopCurrency;

            /* Cookie currency */
            cookieCurrency = Currency.cookie.read();

            /* Fix for customer account pages */
            jQuery('span.money span.money').each(function () {
                jQuery(this).parents('span.money').removeClass('money');
            });

            /* Saving the current price */
            jQuery('span.money').each(function () {
                jQuery(this).attr('data-currency-USD', jQuery(this).html());
            });

            // If there's no cookie.
            if (cookieCurrency == null) {
                if (shopCurrency !== defaultCurrency) {
                    Currency.convertAll(shopCurrency, defaultCurrency);
                    jQuery('.currency_code').html(defaultCurrency);
                } else {
                    Currency.currentCurrency = defaultCurrency;
                }
                Currency.cookie.write(defaultCurrency);
            }
            // If the cookie value does not correspond to any value in the currency dropdown.
            else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
                Currency.currentCurrency = shopCurrency;
                Currency.cookie.write(shopCurrency);
            } else if (cookieCurrency === shopCurrency) {
                Currency.currentCurrency = shopCurrency;
            } else {
                Currency.convertAll(shopCurrency, cookieCurrency);

                jQuery('#currencies li').removeClass('active');
                jQuery('#currencies #currency-' + cookieCurrency).addClass('active');
                jQuery('.currency_code').html(cookieCurrency);
            }

            jQuery('[name=currencies]').val(Currency.currentCurrency).change(function () {
                var newCurrency = jQuery(this).val();
                Currency.convertAll(Currency.currentCurrency, newCurrency);
                jQuery('.currency_code').html(Currency.currentCurrency);
                jQuery(this).parents('#currency').removeClass('open');

                location.reload();
            });


            $('.currencies li').removeClass('active');
            $('.currencies .currency-' + Currency.cookie.read()).addClass('active');
        }

        function currenciesCallbackSpecial(id) {
            /* Saving the current price */
            jQuery(id).each(function () {
                jQuery(this).attr('data-currency-USD', jQuery(this).html());
            });

            /* Update currency */
            Currency.convertAll(shopCurrency, Currency.cookie.read(), id, 'money_format');
        }
</script>  
<script>
        jQuery(function () {
            jQuery('.swatch :radio').change(function () {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                        .closest('form')
                        .find('.single-option-selector')
                        .eq(optionIndex)
                        .val(optionValue)
                        .trigger('change');
            });
        });
</script>
<!--Androll-->
<script type="text/javascript">
        adroll_adv_id = "HTF7KIWJRBHHXL46WLUDBC";
        adroll_pix_id = "IE5CHDRTR5ABXH2P6QXAVM";
        (function () {
            var oldonload = window.onload;
            window.onload = function () {
                __adroll_loaded = true;
                var scr = document.createElement("script");
                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                scr.setAttribute('async', 'true');
                scr.type = "text/javascript";
                scr.src = host + "/j/roundtrip.js";
                ((document.getElementsByTagName('head') || [null])[0] ||
                        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                if (oldonload) {
                    oldonload()
                }
            };
        }());
</script>
<!-- Google Code -->
<script>

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {

                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)

        }
        )(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');



        ga('create', 'UA-55571446-8', 'auto');

        ga('require', 'displayfeatures');

        ga('set', 'dimension1', 'sf_jewelry');

        ga('set', 'dimension2', 'jewelry_store');

        ga('send', 'pageview');

</script>
<?php include('./footer.php'); ?>


