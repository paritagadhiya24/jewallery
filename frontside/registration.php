<?php include('./header.php'); ?>
<?php
//database connection
//session_start();

//echo "<pre>";print_r($_POST);die;
include('../config.php');
//print_r($_POST);EXIT;
	if(isset($_POST['submit'])){
//            print_r($_POST);EXIT;
//            upload image
            $upload_dir = 'picture';
//            echo "<pre>";print_r($_FILES);die;
            $tmp_name = $_FILES["image"]["tmp_name"];
            $name = basename($_FILES["image"]["name"]);
                if($name == '')
                {
                    $image = "";
                }
             else {
                $image = $upload_dir . "/" . $name;    
                }
            move_uploaded_file($tmp_name, $image);
     //  echo "hi";die;
     //echo "<pre>";print_r($submit);die;  
//     $date_Of_birth = $_POST['day']."-". $_POST['month']."-".$_POST['year']; 
             
 //insert record from user table
    $sql = "INSERT into customer(`first_name`,`last_name`,`user_name`,`email`,`password`,`gender`,`date_of_birth`,`address`,`city`,`state`,`country`,`pincode`,`phone_number`,`image`) VALUES ('" . $_POST['first_name'] . "','" . $_POST['last_name'] . "','" . $_POST['user_name'] . "','".$_POST['email']."','" . $_POST['password'] . "','" . $_POST['gender'] . "','" . $_POST['date_of_birth'] . "','" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['state'] . "','" . $_POST['country'] . "','" . $_POST['pincode'] . "','" . $_POST['phone_number'] . "','$name')";
//    echo $sql;die;
    if (mysqli_query($conn,$sql)) {       
        //        header('Location: customerlist.php');
                      echo '<script>window.location = "index.php";</script>';        
        
        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    
  //redirect userdetail form
    //header("Location:loginform.php");
}
$conn->close();
?>   



<!--End top-->


  <div id="content-wrapper-parent">
    <div id="content-wrapper">  
      
        
      
      <!-- Content -->
      <div id="content" class="clearfix">        
        
        <div id="breadcrumb" class="breadcrumb">
  <div itemprop="breadcrumb" class="container">
    <div class="row">
      <div class="col-md-24">
        <a href="index.php" class="homepage-link" title="Back to the frontpage">Home</a>
        
        <span>/</span>
        <span class="page-title">Registration</span>
        
      </div>
    </div>
  </div>
</div>
                
        <section class="content">
          <div class="container">
            <div class="row">
<div id="page-header" class="col-md-24">
  
  <h1 id="page-title">Registration</h1> 
  
</div>

<div id="col-main" class="col-md-24 login-page clearfix">
  
  <div class="row checkout-form">
    <div class="col-md-12 row-left">
      
      <!-- Customer Account Login -->
      
      <div id="customer-login">
        
<!--        <div class="checkout-title">
          <span class="general-title">Customer Login</span>
        </div>-->
        
        <form method="post" id="login" accept-charset="UTF-8" class="" enctype="multipart/form-data">
            <!--<input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="?" />-->
        
        
            <!--<form action="customer/customerinsert.php" method="post" class="form-horizontal" enctype="multipart/form-data">-->
        
        <ul>
<li><label for="first_name">first_name:</label></li>
<li><input type="text" name="first_name" size="50" pattern="[a-zA-Z]*" required="" /></li>
<li><label for="last_name">last_name:</label></li>
<li><input type="text" name="last_name" size="50"  pattern="[a-zA-Z]*" required=""/></li>
<li><label for="user_name">user_name:</label></li>
<li><input type="text" name="user_name" size="50" pattern="[a-z A-Z]*" required=""/></li>
<li><label for="email">email:</label></li>
<li><input type="text" name="email" size="50" pattern="[[\w\-]+\@[\w\-]+\.[\w\-]+]*" required=""  /></li>
<li><label for="password">password:</label></li>
<li><input type="password" name="password" size="50" pattern="[a-zA-Z0-9]*" required="" /></li>
<li><label id="gender">gender:</label></li>
<li><input type="radio" name="gender" value="male" /><span>male</span></li>
<li><input type="radio" name="gender" value="female" /><span>female</span></li>
<li><label for="date_of_birth">date_of_birth:</label></li>
<li><input type="text" name="date_of_birth" size="50" /></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" size="50" pattern="[a-z A-Z0-9]*" required=""/></li>
<li><label for="city">city:</label></li>
<li><input type="text" name="city" size="50" pattern="[a-zA-Z]*" required=""/></li>
<li><label for="state">state:</label></li>
<li><input type="text" name="state" size="50" pattern="[a-zA-Z]*" required="" /></li>
<li><label for="country">Country:</label></li>
<li><select name="country">
<option selected="" value="Default">(Please select a country)</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select></li>
<li><label for="pincode">pincode:</label></li>
<li><input type="text" name="pincode" pattern="[0-9]*" required="" /></li>
<li><label for="phone_number">phone_number:</label></li>
<li><input type="text" name="phone_number" pattern="[0-9]*" required="" /></li>
<li><label for="image">Image:</label></li>
<li><input type="file" name="image" pattern="[a-zA-Z0-9]*" required="" /></li>
<li><input type="submit" name="submit" value="Submit" /></li>

</ul>
                
                
                    
<!--          <li class="col-md-21 unpadding-top">

            <ul class="login-wrapper list-unstyled">              
              <li>
                  <a href="loginform.php" button class="btn"  type="submit">create account</button></a>
                        <button type="submit" name="submit" class="btn" >Submit</button>
                <li><a href="customer/customerlist.php" title="Customer">Customer </a></li>
                
              </li>
              <li>
                <a class="action" href="javascript:;" onclick="showRecoverPasswordForm()">Forgot your password?</a>
              </li>
              <li>
                or <a class="return" href="../index.html">Return to store</a>
              </li>
            </ul>
          </li>-->
           
        </ul>
            </form>
      
      </div>

      <!-- Password Recovery -->
      <div id="recover-password" style="display: none;">
        
        <div class="checkout-title">
          <span class="general-title">Reset Password</span>
          <span class="line"></span>
        </div>
        
        <p class="note">We will send you an email to reset your password.</p>
        
        <form method="post"  accept-charset="UTF-8" >
            <input type="hidden" name="form_type" value="recover_customer_password" />
            <input type="hidden" name="utf8" value="?" />
        
        
        
        <ul id="recover-form" class="list-unstyled clearfix">
          <li class="clearfix"></li>
          <li id="recover_email" class="col-md-21">
            <label class="control-label" for="email">Email Address  <span class="req">*</span></label>
            <input type="email" value="" name="email" id="recover-email" class="form-control" />
          </li>
          
          <li class="col-md-21 unpadding-top">
            <ul class="login-wrapper list-unstyled">
          <li>
            <a class="action" href="javascript:;" onclick="hideRecoverPasswordForm()">Return to login?</a>
            or
            <a class="return" href="index.php">Return to store</a>
          </li>
          <li>
            <button class="btn btn-1"  type="submit">Submit</button>
          </li>
        </ul>
          </li>
        </ul>
        
        </form>
     
      </div>
    </div>
</form> 
  </div>
</div>
 

<script type="text/javascript">
  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
  
  function showRecoverPasswordForm() {
    $('#recover-password').fadeIn();
    $('#customer-login').hide();
    window.location.hash = '#recover';
    return false;
  }
  
  function hideRecoverPasswordForm() {
    $('#recover-password').hide();
    $('#customer-login').fadeIn();
    window.location.hash = '';
    return false;
  }
</script>

              
              
              
            </div>
          </div>
          
          

        </section>        
      </div>
    </div>
  </div>  
  <script src="cdn.shopify.com/s/files/1/0908/7252/t/2/assets/cs.globalf4b4.js?1309057467802046266" type="text/javascript"></script>
  
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
                  <li class="control-group vendor">
                    <span class="control-label">Vendor :</span>
                  </li>
                  <li class="control-group type">
                    <span class="control-label">Type :</span>
                  </li>
                </ul>
              </div> 
              
              <form action="#" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
                
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
  

<script src="../../cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0908/7252/t/2/assets/jquery.currencies.minf4b4.js?1309057467802046266" type="text/javascript"></script>

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

  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-55571446-8', 'auto');

  ga('require', 'displayfeatures');
  
  ga('set', 'dimension1', 'sf_jewelry');
     
  ga('set', 'dimension2', 'jewelry_store');

  ga('send', 'pageview');

</script>
  
</body>

<!-- Mirrored from cs-utc-jewelry.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2018 12:18:00 GMT -->
</html>

 <?php include('./footer.php'); ?>