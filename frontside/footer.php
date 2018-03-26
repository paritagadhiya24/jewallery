
  <footer id="footer">      
    <div id="footer-content">
  <!--<h6 class="general-title contact-footer-title">Newsletter</h6>-->
  
 
<!--  <div id="widget-newsletter">
    <div class="container">      
      
      <div class="newsletter col-md-24">
        <form action="https://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
          <span class="news-desc">We promise only send the good things</span>
          <div class="group_input">
            <input class="form-control" type="email" placeholder="Your Email Address" name="MERGE0" id="MERGE0" />
            <input type="hidden" name="MERGE1" id="MERGE1" size="25" value="Customer Name">
            <input type="hidden" name="MERGE2" id="MERGE2" size="25" value="Customer Name 2">
            <div class="unpadding-top">
              <button class="btn btn-1" type="submit"><i class="fa fa-paper-plane"></i></button></div>
          </div>              
        </form>
      </div>                
    </div>
  </div>-->
 <div class="footer-content footer-content-top clearfix">
    <div class="container">    
    <div class="footer-link-list col-md-6">
        <div class="group">
        <h5 class="general-title">Account</h5>
        
        <ul class="list-unstyled list-styled">
          

          
          <li class="list-unstyled">
            <a href="index.html">Order History</a>
          </li>
          
          <li class="list-unstyled">
              <a href="loginform.php">Cart Page</a>
          </li>
          
          <li class="list-unstyled">
              <a href="loginform.php">Sign In</a>
          </li>
          
          <li class="list-unstyled">
              <a href="index.php">Contact Us</a>
          </li>
          
        </ul>
      </div>
<!--      <div class="group">
        <h5 class="general-title">About Us</h5>        
        <ul class="list-unstyled list-styled">          
          <li class="list-unstyled">
            <a href="index.html">Store Locations</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Whosesalers</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Map Site</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Contact Us</a>
          </li>          
        </ul>
      </div>-->
    </div>    
    <div class="footer-link-list col-md-6">
        <div class="group">
        <h5 class="general-title">category</h5>        
        <ul class="list-unstyled list-styled">
            <li>
                <?php
                                //database connection
                                include('../config.php');
                                //data listing desc order                                  
                                $data = "select * from category ORDER BY (category_id) "; 
                                $result = $conn->query($data);                               
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                <li>
                                   <a href="<?php echo 'category.php?cat_id='.$row["category_id"].'&&subcat_id='.$row1["subcategory_id"]; ?>"><?php echo $row1['subcategory_name'] ?></a> 
                                </li> 
                 <span> <?php echo $row['category_name'] ?> </span>
                  
            </li> 
             <?php
                                }
                                $conn->close();
                                
                                ?>    
<!--          
          <li class="list-unstyled">
              <a href="index.php">gold</a>
          </li>
          
          <li class="list-unstyled">
            <a href="index.html">diamond</a>
          </li>
          
          <li class="list-unstyled">
            <a href="index.html">silver</a>
          </li>
          
          <li class="list-unstyled">
            <a href="index.html">platinum</a>
          </li>
          -->
        </ul>
      </div>
<!--      <div class="group">
        <h5 class="general-title">Information</h5>        
        <ul class="list-unstyled list-styled">          
          <li class="list-unstyled">
            <a href="index.html">Help &amp; FAQs</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Advance Search</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Gift Cards</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Shop By Brands</a>
          </li>          
        </ul>
      </div>-->
    </div>    
    <div class="footer-link-list col-md-6">
          <div class="group">
        <h5 class="general-title">contact us</h5>
        
        <ul class="list-unstyled list-styled">
          
          <li class="list-unstyled">
              <li class="fa fa-envelope-square"></li>
              jewellery@gmail.com
          </li>
          
          <li class="list-unstyled">
              <li class="fa fa-phone-square"></li>
            +917985642893
          </li>
          <li class="list-unstyled">
          <li class="fa fa-phone-square"></li>
           +919835476215
          </li>
          
          <li class="list-unstyled">
          <li class="fa fa-phone-square"></li>
            +918245786589          
          </li>
        </ul>
      </div>
<!--      <div class="group">
        <h5 class="general-title">Account</h5>        
        <ul class="list-unstyled list-styled">          
          <li class="list-unstyled">
            <a href="index.html">Preferences</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Order History</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Cart Page</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Sign In</a>
          </li>          
        </ul>
      </div>-->
    </div>
    <div class="footer-link-list col-md-6">
        <div class="group">
        <h5 class="general-title">Address</h5>
        
        <ul class="list-unstyled list-styled">
          
          <li class="list-unstyled">
              <li class="fa fa-map-marker"></li>
              <a>&nbsp;samundra complex,</br> &nbsp;&nbsp;&nbsp;CG road-380009,</br> &nbsp;&nbsp;&nbsp;girish coldrinks, </br> &nbsp;&nbsp;&nbsp;navaragpura,</br> &nbsp;&nbsp;&nbsp;ahemdabad</a>
          </li>
          

        </ul>
      </div>
<!--      <div class="group">
        <h5 class="general-title">Customer</h5>        
        <ul class="list-unstyled list-styled">          
          <li class="list-unstyled">
            <a href="search.html">Search Advanced</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Return Policy</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Privacy Policy</a>
          </li>          
          <li class="list-unstyled">
            <a href="index.html">Help &amp; Contact</a>
          </li>          
        </ul>
      </div>-->
    </div>    
  </div>
  </div>
  <div class="footer-content footer-content-bottom clearfix">
    <div class="container">  
    <div class="copyright col-md-12">&copy; 2018 <a href="index.html"></a>. All Rights Reserved.</div> 
<!--    <div id="widget-payment" class="col-md-12">
      <ul id="payments" class="list-inline animated">
        <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="Visa"><a href="#" class="icons visa"></a></li>    
        <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="Mastercard"><a href="#" class="icons mastercard"></a></li>
        <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="American Express"><a href="#" class="icons amex"></a></li>
         <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="Paypal"><a href="#" class="icons paypal"></a></li>
        <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="Moneybookers"><a href="#;" class="icons moneybookers"></a></li>
    </ul>
    </div>    -->
  </div>
  </div>
</div>    
  </footer>
 <div class="newsletter-popup" style="display: none;">
    <form action="https://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" name="mc-embedded-subscribe-form" target="_blank">
      <h4>-50% Deal</h4>      
      <p class="tagline">subscribe for newsletter and get the item for 50% off</p>      
      <div class="group_input">
        <input class="form-control" type="email" name="EMAIL" placeholder="YOUR EMAIL" />
        <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
      </div> 
    </form>
    <div id="popup-hide">
      <input type="checkbox" id="mc-popup-hide" value="1" checked="checked"> <label for="mc-popup-hide">Never show this message again</label>
    </div>
  </div>
<script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.globalf4b4.js 1309057467802046266.js" type="text/javascript"></script> 
  <script type="text/javascript">
    //<![CDATA[    
    // Including api.jquery.js conditionnally.
    if (typeof Shopify.onCartShippingRatesUpdate === 'undefined') {
      document.write("\u003cscript src=\"\/\/cdn.shopify.com\/s\/assets\/themes_support\/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js\" type=\"text\/javascript\"\u003e\u003c\/script\u003e");
    }    
    //]]>
  </script>   
  <script type="text/javascript">
  Shopify.updateCartInfo = function(cart, cart_summary_id, cart_count_id) {
    if ((typeof cart_summary_id) === 'string') {
      var cart_summary = jQuery(cart_summary_id);
      if (cart_summary.length) {
        // Start from scratch.
        cart_summary.empty();
        // Pull it all out.
        
        jQuery.each(cart, function(key, value) {
          if (key === 'items') {

            
            if (value.length) {
              
			  jQuery('<div class="items control-container"></div>').appendTo(cart_summary);
              var table = jQuery(cart_summary_id + ' div.items');
       
              jQuery.each(value, function(i, item) {
                jQuery('<div class="row items-wrapper"><a class="cart-close" title="Remove" href="javascript:void(0);" onclick="Shopify.removeItem(' + item.variant_id + ')"><i class="fa fa-times"></i></a><div class="col-md-8 cart-left"><a class="cart-image" href="' + item.url + '"><img src="' + Shopify.resizeImage(item.image, 'small') + '" alt="" title=""/></a></div><div class="col-md-16 cart-right"><div class="cart-title"><a href="' + item.url + '">' + item.title + '</a></div><div class="cart-price">' + Shopify.formatMoney(item.price, "<span class='money'>${{amount}}</span>") + '<span class="x"> x </span>' + item.quantity + '</div></div></div>').appendTo(table);
              });
                       
              jQuery('<div class="subtotal"><span>Subtotal:</span><span class="cart-total-right">' + Shopify.formatMoney(cart.total_price, "<span class='money'>${{amount}}</span>") + '</span></div>').appendTo(cart_summary);
              jQuery('<div class="action"><button class="btn" onclick="window.location=\'/checkout\'">CHECKOUT</button><a class="btn btn-1" href="/cart\">View Cart</button></a></div>').appendTo(cart_summary);
              

            }
            else {
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
      }
      else if (cart.item_count == 1) {
        jQuery('#' + cart_count_id).html('1 item in your cart');
      }
        else {
          jQuery('#' + cart_count_id).html(cart.item_count + ' items in your cart');
        }
    }
    
    /* Update cart info */
    updateCartDesc(cart);
  };
  
  function updateCartDesc(data){
    var $cartLinkText = $('.cart-link .icon:first .number');
           switch(data.item_count){
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
    var $cartPrice = '<span class="total"> - '+ Shopify.formatMoney(data.total_price, "<span class='money'>${{amount}}</span>") +'</span>';
    
    /* Update currency */
    currenciesCallbackSpecial('#umbrella span.money');
     
  }
  
  Shopify.onCartUpdate = function(cart) {
    Shopify.updateCartInfo(cart, '#cart-info #cart-content', 'shopping-cart');
  };
  
  $(window).load(function() {
    // Let's get the cart and show what's in it in the cart box.	
    Shopify.getCart(function(cart) {
      
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
<!--                  <li class="control-group vendor">
                    <span class="control-label">Vendor :</span>
                  </li>
                  <li class="control-group type">
                    <span class="control-label">Type :</span>
                  </li>-->
                </ul>
              </div> 
              
              <form action="https://cs-utc-jewelry.myshopify.com/cart/add" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
                
                <div id="quick-shop-price-container" class="detail-price"></div>

                <div class="quantity-wrapper clearfix">
                  <label class="wrapper-title">Quantity</label>
                  <div class="wrapper">
                    <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1" />
                    <span class="qty-group">
                      <span class="qty-wrapper">
                        <span class="qty-up" title="Increase" data-src="#qs-quantity">
                          <i class="fa fa-plus"></i>
                        </span>
                        
                        <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                          <i class="fa fa-minus"></i>
                        </span>
                      </span>
                    </span>
                  </div>
                </div>
                
                <div id="quick-shop-variants-container" class="variants-wrapper"></div>
                
                <div class="others-bottom">
                  <input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="Add to Cart" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
  jQuery(document).ready(function($) {
    
    $('#quick-shop-modal').on('hidden.bs.modal', function () {
      $('.zoomContainer').css('z-index', '1');
      $('#top').removeClass('z-idx');
    })
    
    $('#quick-shop-modal').on( 'shown.bs.modal', function () {
      $('#top').addClass('z-idx');
      $('.modal-dialog').addClass("animated");
      imagesLoaded( '#quick-shop-modal', function() {
        
        updateScrollThumbsQS();
        
        $("#gallery_main_qs").show().owlCarousel({
          navigation : true,
          pagination: false,
          items: 4,
          itemsDesktop : [1199,4],
          itemsDesktopSmall : [979,3],
          itemsTablet: [768,3],
          itemsMobile : [479,2],
          scrollPerPage: true,
          navigationText: ['<span class="btooltip" title="Previous"></span>', '<span class="btooltip" title="Next"></span>']
        });
        
        var delayLoadingQS = '';       
        delayLoadingQS = setInterval(function(){            
          
          quickShopModalBackground.hide();
          $('.zoomContainer').css('z-index', '2000');
          $('#quick-shop-modal .modal-body').resize(); 
          
          clearInterval( delayLoadingQS );            
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
    
    $('body').on(clickEv, '.quick_shop:not(.unavailable)', function(event){
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
      quickShopImage.html('<a class="main-image"><img class="img-zoom img-responsive image-fly" src="'+ Shopify.resizeImage(selectedProduct.featured_image, "grande")+'" data-zoom-image="'+ selectedProduct.featured_image +'" alt="" /></a>');
      
      var qs_images_size = "";
       if(selectedProduct.images.length < 4) qs_images_size="small-thumbs";
       
       quickShopImage.append('<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini '+qs_images_size+'"></div>');
        
        var qs_images = selectedProduct.images;
        $.each(qs_images, function(index, value) {
          if(index)
            quickShopImage.find('#gallery_main_qs').append('<a class="image-thumb" href="'+value+'" alt="" data-image="'+ Shopify.resizeImage(value, 'grande') +'" data-zoom-image="'+ Shopify.resizeImage(value, 'original') +'"><img src="'+ Shopify.resizeImage(value, "compact") +'" alt="" /></a>');
          else
            quickShopImage.find('#gallery_main_qs').append('<a class="image-thumb active" href="'+value+'" alt="" data-image="'+ Shopify.resizeImage(value, 'grande') +'" data-zoom-image="'+ Shopify.resizeImage(value, 'original') +'"><img src="'+ Shopify.resizeImage(value, "compact") +'" alt="" /></a>');
        });
        
        // Update title
        quickShopTitle.html('<span href="/products/' + selectedProduct.handle + '">' + selectedProduct.title + '</span>');
        
        // Update description
        var desc = selectedProduct.description.substr(0,370)+"...";
        quickShopDescription.html(desc);
        
        // Update relative
        quickShopRelative.find('a').remove();
        
        quickShopRelative.find('.vendor .control-label').after('<a href="/collections/vendors?q='+selectedProduct.vendor.replace(' ', '+')+'"> '+selectedProduct.vendor+'</a>');
        quickShopRelative.find('.type .control-label').after('<a href="/collections/types?q='+selectedProduct.type.replace(' ', '+')+'"> '+selectedProduct.type+'</a>');
        
        // Generate variants
        var productVariants = selectedProduct.variants;
        var productVariantsCount = productVariants.length;
        
        quickShopPriceContainer.html('');
        quickShopVariantsContainer.html('');
        quickShopAddToCartButton.removeAttr('disabled').fadeTo(200,1);
        
        if (productVariantsCount > 1) {
          
          // Reveal variants container
          quickShopVariantsContainer.show();
          
          // Build variants element
          var quickShopVariantElement = $('<select>',{ 'id': ('#quick-shop-variants-' + selectedProductID) , 'name': 'id'});
          var quickShopVariantOptions = '';
          
          for (var i=0; i < productVariantsCount; i++) {
            quickShopVariantOptions += '<option value="'+ productVariants[i].id +'">'+ productVariants[i].title +'</option>'
          };
          
          // Add variants element to page
          quickShopVariantElement.append(quickShopVariantOptions);
          quickShopVariantsContainer.append(quickShopVariantElement);
          
          // Bind variants to OptionSelect JS
          new Shopify.OptionSelectors(('#quick-shop-variants-' + selectedProductID), { product: selectedProduct, onVariantSelected: selectOptionCallback });
          
          // Add label if only one product option and it isn't 'Title'.
          if (selectedProduct.options.length == 1 && selectedProduct.options[0] != 'Title' ){
            $('#quick-shop-product-actions .selector-wrapper:eq(0)').prepend('<label>'+ selectedProduct.options[0] +'</label>');
          }
          
          // Auto-select first available variant on page load.
          var found_one_in_stock = false;
          for (var i=0; i < selectedProduct.variants.length; i++) {
            
            var variant = selectedProduct.variants[i];
            if(variant.available && found_one_in_stock == false) {
              
              found_one_in_stock = true;
              for (var j=0; j < variant.options.length; j++){
                
                $('.single-option-selector:eq('+ j +')').val(variant.options[j]).trigger('change');
                
              }
            }
          }
          
          $('#quick-shop-variants-container .single-option-selector').customStyle();
          
        } else { // If product only has a single variant
          
          // Hide unnecessary variants container
          quickShopVariantsContainer.hide(); 
          
          // Build variants element
          var quickShopVariantElement = $('<select>',{ 'id': ('#quick-shop-variants-' + selectedProductID) , 'name': 'id'});
          var quickShopVariantOptions = '';
          
          for (var i=0; i < productVariantsCount; i++) {
            quickShopVariantOptions += '<option value="'+ productVariants[i].id +'">'+ productVariants[i].title +'</option>'
          };
          
          // Add variants element to page
          quickShopVariantElement.append(quickShopVariantOptions);
          quickShopVariantsContainer.append(quickShopVariantElement);
          
          
          // Update the add button to include correct variant id
          quickShopAddToCartButton.data('variant-id', productVariants[0].id);
          
          // Determine if product is on sale
          if ( productVariants[0].compare_at_price > 0 && productVariants[0].compare_at_price > productVariants[0].price ) {
            quickShopPriceContainer.html('<del class="price_compare">'+ Shopify.formatMoney(productVariants[0].compare_at_price, "<span class='money'>${{amount}}</span>") + '</del>' + '<span class="price_sale">'+ Shopify.formatMoney(productVariants[0].price, "<span class='money'>${{amount}}</span>") +'</span>');
          } else {
            quickShopPriceContainer.html('<span class="price">'+ Shopify.formatMoney(productVariants[0].price, "<span class='money'>${{amount}}</span>") + '</span>' );
          }
          
        } // END of (productVariantsCount > 1)
        
        
        // Update currency
        currenciesCallbackSpecial('#quick-shop-modal span.money');
         
         
         });
         
         /* selectOptionCallback
      ===================================== */
         var selectOptionCallback = function(variant, selector) {
           
           // selected a valid and in stock variant
           if (variant && (variant.inventory_quantity > 0 || (variant.inventory_quantity <= 0 && variant.inventory_policy == 'continue') ) ) {
             
             quickShopAddToCartButton.data('variant-id', variant.id);
             

             quickShopAddToCartButton.removeAttr('disabled').fadeTo(200,1); 
             
             // determine if variant is on sale
             if ( variant.compare_at_price > 0 && variant.compare_at_price > variant.price ) {
               quickShopPriceContainer.html('</del>' + '<span class="price_sale">'+ Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") +'</span><span class="dash">/</span><del class="price_compare">'+ Shopify.formatMoney(variant.compare_at_price, "<span class='money'>${{amount}}</span>"));
             } else {
               quickShopPriceContainer.html('<span class="price">'+ Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span>' );
             };
             
             // selected an invalid or out of stock variant 
           } else {
             // variant doesn't exist
             quickShopAddToCartButton.attr('disabled', 'disabled').fadeTo(200,0.5);
             var message = variant ? "Sold Out" : "Unavailable";    
             quickShopPriceContainer.html('<span class="unavailable">' + message + '</span>');
             
           }
           
           
           // Update currency
           currenciesCallbackSpecial('#quick-shop-modal span.money');
            
            }
            
           });
</script>
  

<script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_javascripts_currencies.js" type="text/javascript"></script>
<script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.currencies.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
<!--<script src="js/https _ajax.googleapis.com_ajax_libs_jquery_3.3.1_jquery.min.js"></script>-->
<!--<script>
    jQuery.noConflict();
 
jQuery( document ).ready(function( $ ) {
    // You can use the locally-scoped $ in here as an alias to jQuery.
    $( "div" ).hide();
});
 
// The $ variable in the global scope has the prototype.js meaning.
window.onload = function(){
    var mainDiv = $( "main" );
}            
 </script>-->
                
<script type="text/javascript">
  
  jQuery('.currencies li').on(clickEv, function() {
    if(!$(this).hasClass('active')){
      jQuery('.currencies li').removeClass('active');
      var cls = jQuery(this).attr('class');
      jQuery('.' + cls).addClass('active');
      
      var selectedValue = jQuery(this).find('input[type=hidden]').val();
      jQuery('.currencies_src option[value='+selectedValue+']').attr('selected', true);
      jQuery('.currencies_src').change();
      jQuery('.currency').removeClass('open');
    }
  });
  
  var shopCurrency = '',
      defaultCurrency = '',
      cookieCurrency = '';
  currenciesCallback();
  
  function currenciesCallback (){
    
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
    jQuery('span.money span.money').each(function() {
      jQuery(this).parents('span.money').removeClass('money');
    });
    
    /* Saving the current price */
    jQuery('span.money').each(function() {
      jQuery(this).attr('data-currency-USD', jQuery(this).html());
    });
    
    // If there's no cookie.
    if (cookieCurrency == null) {
      if (shopCurrency !== defaultCurrency) {
        Currency.convertAll(shopCurrency, defaultCurrency);
        jQuery('.currency_code').html(defaultCurrency);
      }
      else {
        Currency.currentCurrency = defaultCurrency;
      }
      Currency.cookie.write(defaultCurrency);
    }
    // If the cookie value does not correspond to any value in the currency dropdown.
    else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
      Currency.currentCurrency = shopCurrency;
      Currency.cookie.write(shopCurrency);
    }
      else if (cookieCurrency === shopCurrency) {
        Currency.currentCurrency = shopCurrency;
      }
      else {
        Currency.convertAll(shopCurrency, cookieCurrency);
        
        jQuery('#currencies li').removeClass('active');
        jQuery('#currencies #currency-'+cookieCurrency).addClass('active');
        jQuery('.currency_code').html(cookieCurrency);
      }
    
    jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
      var newCurrency = jQuery(this).val();
      Currency.convertAll(Currency.currentCurrency, newCurrency);
      jQuery('.currency_code').html(Currency.currentCurrency);
      jQuery(this).parents('#currency').removeClass('open');
      
      location.reload();
    });
    
    
    $('.currencies li').removeClass('active');
    $('.currencies .currency-' + Currency.cookie.read()).addClass('active');
  }
  
  function currenciesCallbackSpecial(id){
    /* Saving the current price */
    jQuery(id).each(function() {
      jQuery(this).attr('data-currency-USD', jQuery(this).html());
    });
    
    /* Update currency */
    Currency.convertAll(shopCurrency, Currency.cookie.read(), id, 'money_format');
  }
</script>


  
  
  <script>
    jQuery(function() {
      jQuery('.swatch :radio').change(function() {
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
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

<!-- Google Code -->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-55571446-8', 'auto');

  ga('require', 'displayfeatures');
  
  ga('set', 'dimension1', 'sf_jewelry');
     
  ga('set', 'dimension2', 'jewelry_store');

  ga('send', 'pageview');

</script>
  
</body>

<!-- Mirrored from cs-utc-jewelry.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2018 12:17:35 GMT -->
</html>
