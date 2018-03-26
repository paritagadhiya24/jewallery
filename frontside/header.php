<?php
session_start();
//print_r($_SESSION['data']['first_name']);
//exit;
?>
<?php
include('../config.php');
$customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';
$num_rows = 0;
if($customer_id != '')
{
$sql1 = "SELECT product_id FROM cart WHERE customer_id=$customer_id";
$result1 = $conn->query($sql1);
//object oriented
$num_rows = $result1->num_rows;
$conn->close();
}
 ?>

<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from cs-utc-jewelry.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2018 12:15:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="index.php" />  
  <link href='css/http _fonts.googleapis.com_css family=Carrois+Gothic.css' rel='stylesheet' type='text/css'>
        <link href='css/http _fonts.googleapis.com_css family=Lato 100,300,400,700.css' rel='stylesheet' type='text/css'>
        <link href='css/http _fonts.googleapis.com_css family=Raleway 400,600,500,700.css' rel='stylesheet' type='text/css'>
        <link href='css/http _fonts.googleapis.com_css family=Belleza.css' rel='stylesheet' type='text/css'>
        <link href='css/http _fonts.googleapis.com_css family=Quicksand 300,400,700.css' rel='stylesheet' type='text/css'>
  
  <meta name="description" content="" />  
  <title>Jewelry</title>
  <meta property="og:image" content="cdn.shopify.com/s/files/1/0908/7252/t/2/assets/logof4b4.png?1309057467802046266" /> 
  <link href="css/http _localhost 808_j_frontside_netdna.bootstrapcdn.com_font-awesome_4.2.0_css_font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.cameraf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />       
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.fancybox-buttonsf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.animatef4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_applicationf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_swatchf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.owl.carouself4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.bxsliderf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_bootstrap.min.3xf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.bootstrap.3xf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.globalf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.stylef4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.media.3xf4b4.css 1309057467802046266.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery-1.9.1.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.imagesloaded.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_bootstrap.min.3xf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.easing.1.3f4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.camera.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.mobile.customized.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cookiesf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_modernizrf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.optionSelectf4b4.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.customSelectf4b4.js 1309057467802046266.js" type="text/javascript"></script>  
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_applicationf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.owl.carousel.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.bxsliderf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_skrollr.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.fancybox-buttonsf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.zoomf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_javascripts_currencies.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_jquery.currencies.minf4b4.js 1309057467802046266.js" type="text/javascript"></script>
        <script src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_files_1_0908_7252_t_2_assets_cs.scriptf4b4.js 1309057467802046266.js" type="text/javascript"></script>
  <!-- Facebook Conversion Code for Themes -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '../connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6016096938024', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6016096938024&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/9087252/digital_wallets/dialog">
<script>var Shopify = Shopify || {};
Shopify.shop = "cs-utc-jewelry.myshopify.com";
Shopify.theme = {"name":"jewelry","id":41982083,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=cs-utc-jewelry.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();
</script>
<script id="__st">var __st={"a":9087252,"offset":-18000,"reqid":"13902eee-44ac-4402-afdc-537d1b167ff3","pageurl":"cs-utc-jewelry.myshopify.com\/","u":"4c12fc4ed0e0","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "cs-utc-jewelry.myshopify.com";
window.Shopify.Checkout.rememberMeHost = "pay.shopify.com";
window.Shopify.Checkout.rememberMeAccessToken = "NEU1NVlCOHVTckM2RFVuKzVCL3dVSlU0UTRYS1hOcmFBNDV6MW81SUp1VlkzWkxoSmNzVm5PeHdZc2Rab0I2by0tbzBkamNlcHZseExMK3M5eWJZSU5QZz09--cb84560ccada2827d6181319e39c1f9e5e70856c";
window.Shopify.Checkout.sheetStyleSheetUrl = "\/\/cdn.shopify.com\/s\/assets\/shared\/sheet\/main-c38a91ed541a82b485cb4285b3651975cfbf14dd4524647e78a9715f2c79e28b.css";
</script>
<script defer="defer" integrity="sha256-ZPFx1rMEPOy+uNjNhbpz638SbcVjX57V/jLleulTF6c=" crossorigin="anonymous" src="js/http _localhost 808_j_frontside_cdn.shopify.com_s_assets_storefront_express_buttons-64f171d6b3043cecbeb8d8cd85ba73eb7f126dc5635f9ed5fe32e57ae95317a7.js"></script>
      <script type="text/javascript">
        
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = 'USD';
      var meta = {"page":{"pageType":"home"}};
      for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
      }
    
      </script>

      <script type="text/javascript">
        window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
          
        };
      </script>

      <script type="text/javascript" class="analytics">
        
        

        (function () {
          var customDocumentWrite = function(content) {
            var jquery = null;

            if (window.jQuery) {
              jquery = window.jQuery;
            } else if (window.Checkout && window.Checkout.$) {
              jquery = window.Checkout.$;
            }

            if (jquery) {
              jquery('body').append(content);
            }
          };

          var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
          if (trekkie.integrations) {
            return;
          }
          trekkie.methods = [
            'identify',
            'page',
            'ready',
            'track',
            'trackForm',
            'trackLink'
          ];
          trekkie.factory = function(method) {
            return function() {
              var args = Array.prototype.slice.call(arguments);
              args.unshift(method);
              trekkie.push(args);
              return trekkie;
            };
          };
          for (var i = 0; i < trekkie.methods.length; i++) {
            var key = trekkie.methods[i];
            trekkie[key] = trekkie.factory(key);
          }
          trekkie.load = function(config) {
            trekkie.config = config;
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onerror = function(e) {
              (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
            };
            script.async = true;
            script.src = 'cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min97e4.js?v=2017.09.05.1';
            var first = document.getElementsByTagName('script')[0];
            first.parentNode.insertBefore(script, first);
          };
          trekkie.load(
            {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":9087252,"isMerchantRequest":null,"themeId":41982083,"themeCityHash":9296277099295998190}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.1},"Session Attribution":{}}
          );

          var loaded = false;
          trekkie.ready(function() {
            if (loaded) return;
            loaded = true;

            window.ShopifyAnalytics.lib = window.trekkie;
            

            var originalDocumentWrite = document.write;
            document.write = customDocumentWrite;
            try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
            document.write = originalDocumentWrite;

            
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"home"}
        );
      
            
          });

          
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "cdn.shopify.com/s/assets/shop_events_listener-f2c5800305098f0ebebdfa7d980c9abf56514c46d5305e97a7c476f7c9116163.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
        })();
      </script>
    

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="templateIndex"> 
  <!-- Header -->
  <header id="top" class="fadeInDown clearfix">  
  <!--</header>-->
<!--top-->
<div class="container">
  <div class="top row">

<!--    <div class="col-md-6 phone-shopping">
      <span>PHONE SHOPING (01) 123 456 UJ</span>
    </div>-->

    <div class="col-md-18">
      <ul class="text-right">
        <li class="customer-links hidden-xs">
         <ul id="accounts" class="list-inline" style="margin-right: -230px" >
                                <?php
                                if(!empty($_SESSION['data']))
                                {
                                ?>
                                <li class="my-account">
                                    <a href="account.php">My Account</a>
                                </li>
                                 <?php
                                }
                                if(!empty($_SESSION['data']))
                                {
                                ?>
                                <li class="wish-list">
                                    <a href="wishlist.php">Wish List</a>
                                </li>
                                <?php
                                }
                                if(empty($_SESSION['data']))
                                {
                                ?>
                                <li class="login">
                                    <a href="loginform.php">Login</a>
                                </li>
                                <li>/</li>
                                <li class="register">
                                    <a href="registration.php" id="customer_register_link">Create an account</a>
                                </li>
                                <?php
                                }
                                else
                                {
                                ?>
                                <li><?php echo $_SESSION['data']['first_name'].' '.$_SESSION['data']['last_name']; ?></li>
                                <li><a href="logout.php">Logout</a></li>
                                <?php
                                }
                                ?>
                                
                            </ul> 

<!--<ul id="accounts" class="list-inline" >
  <li class="my-account">
    <a href="account/login.html">My Account</a>
  </li>  
  <li class="login">    
    <span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">
      Login
      <i class="sub-dropdown1"></i>
      <i class="sub-dropdown"></i>
    </span>
     Customer Account Login 
    <div id="loginBox" class="dropdown-menu text-left">
      <form method="post" action="https://cs-utc-jewelry.myshopify.com/account/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="?" />

      <div id="bodyBox">
        <ul class="control-container customer-accounts list-unstyled">
          <li class="clearfix">
            <label for="customer_email_box" class="control-label">Email Address <span class="req">*</span></label>
            <input type="email" value="" name="customer[email]" id="customer_email_box" class="form-control" />
          </li>          
          <li class="clearfix">
            <label for="customer_password_box" class="control-label">Password <span class="req">*</span></label>
            <input type="password" value="" name="customer[password]" id="customer_password_box" class="form-control password" />
          </li>          
          <li class="clearfix">
            <button class="btn" type="submit">Login</button>
          </li>
          <li class="clearfix">
            <a class="action btn btn-1" href="account/register.html">Create an account</a>
          </li>
        </ul>
      </div>
      </form>
    </div>    
  </li>
  <li>/</li>   
  <li class="register">
    <a href="account/register.html" id="customer_register_link">Create an account</a>
  </li>  
</ul>-->
       </li>	 
<!--        <li class="li-currency">
          <div class="currency_group">
            <div class="currencies-switcher hidden-xs">            
<div class="currency btn-group uppercase">
  <a class="currency_wrapper dropdown-toggle" data-toggle="dropdown">
    <i class="sub-dropdown1"></i>
    <i class="sub-dropdown"></i>    
    <span class="heading hidden-xs">Currency</span>
    <span class="currency_code visible-xs">USD</span>
    <i class="fa fa-caret-down"></i>
  </a>
  <ul class="currencies dropdown-menu text-left"> 
    <li class="currency-USD active">
      <a href="javascript:;">USD</a>
      <input type="hidden" value="USD" />
    </li>    
    <li class="currency-EUR">
      <a href="javascript:;">EUR</a>
      <input type="hidden" value="EUR" />
    </li>           
    <li class="currency-GBP">
      <a href="javascript:;">GBP</a>
      <input type="hidden" value="GBP" />
    </li>        
  </ul>  
  <select class="currencies_src hide" name="currencies">        
    <option value="USD" selected="selected">USD</option>
    <option value="EUR">EUR</option>    
    <option value="GBP">GBP</option>       
  </select>
</div>
            </div>
          </div>
        </li>        -->
<!--        <li id="widget-social">
          <ul class="list-inline">            
            <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>                        
            <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>            
          </ul>
        </li>        -->
      </ul>
    </div>
  </div>
</div>
<!--End top-->

<div class="line"></div>

<!-- Navigation -->
<div class="container">
  <div class="top-navigation">

    <ul class="list-inline">
      <li class="top-logo">
          <a id="site-title" href="index.php" title="Jewelry">
          
              <img class="img-responsive" src="logo/7cac6ffc-433f-41f3-8c8e-d577cb.png" alt="Jewelry - Shopify theme" height="25" width="198"/>
          
        </a>
      </li>

      <li class="navigation">
        
<nav class="navbar" role="navigation">
  <div class="clearfix">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle main navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="is-mobile visible-xs">
      <ul class="list-inline">
        <li class="is-mobile-menu">
          <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar-group">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </span>
          </div>
        </li>
        <li class="is-mobile-login">
          <div class="btn-group">
            <div class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
            </div>
            <ul class="customer dropdown-menu">
              
              <li class="logout">
                <a href="loginform.php">Login</a>
              </li>
              <li class="account">
                <a href="registeration.php">Register</a>
              </li>              
            </ul>
          </div>
        </li>                
        <li class="is-mobile-wl">
            <a href="wishlist.php"><i class="fa fa-heart"></i></a>
        </li>        
        <li class="is-mobile-cart">
            <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse"> 
         <ul class="nav navbar-nav hoverMenuWrapper">
                                        <li class="nav-item active">
                                            <a href="index.php">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <?php
                                //database connection
                                include('../config.php');
                                //data listing desc order                                  
                                $data = "select * from category ORDER BY (category_id) "; 
                                $result = $conn->query($data);                               
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <li class="nav-item dropdown"> 
                                            <a href="<?php echo 'product.php?cat_id='.$row['category_id']; ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                <span> <?php echo $row['category_name'] ?> </span>
                                                <i class="fa fa-caret-down"></i>
                                                <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                            </a> 
                                            
                                                <ul class="dropdown-menu">
                                                    
                                                            <?php
                                                            //database connection
                                                            include('../config.php');
                                                            //data listing desc order                                  
                                                            $data1 = "select * from subcategory where category_id =  $row[category_id]"; 
                                                            $result1 = $conn->query($data1);                               
                                                            while ($row1 = mysqli_fetch_array($result1)) {
                                                            ?>
                                                            <li>
                                                                <a href="<?php echo 'product.php?cat_id='.$row["category_id"].'&&subcat_id='.$row1["subcategory_id"]; ?>"><?php echo $row1['subcategory_name'] ?></a> 
                                                            </li>                                                                                                                               
                                                            <?php
                                                           
                                                              }
                                                              
                                
                                                            ?>
                                                                                                            
                                                </ul>
                                            
                                        </li> 
                                        <?php
                                }
                                $conn->close();
                                
                                ?>                                                                                                                                                                                                                                                                                    
                                    </ul> 
<!--      <ul class="nav navbar-nav hoverMenuWrapper">    
<li class="nav-item active">
    <a href="index.php">
    <span>Home</span>
  </a>
</li>

<li class="dropdown mega-menu">
  <a href="collections/all.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
    <span>Collections</span>
    
    <i class="fa fa-caret-down"></i>
    
    <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
    <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
  </a>
  
  <div class="megamenu-container megamenu-container-1 dropdown-menu banner-bottom mega-col-4">
    
    <ul class="sub-mega-menu">
	  
      <li>
        
        <ul>
          <li class="list-title">Collection Links</li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/curabitur-cursus-dignis.html">Dolorem Sed
            
            
            
            
            </a>      
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-aliquam-ante-non.html">Proident Nulla
            
            
            
            
            </a>      
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-justo-condimentum.html">Phasellus Leo
            
            
            	<span class="megamenu-label hot-label" >Hot</span>
            
            
            
            </a>      
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/gravida-est-quis-euismod.html">Tristique Amet
            
            
            
            
            	<span class="megamenu-label feature-label" >Featured</span>
            
            </a>      
          </li>
          
        </ul>
      </li>
      
	  
      <li>
        
        <ul>
          <li class="list-title">Collection Links</li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/curabitur-cursus-dignis.html">Dolorem Sed
            
            
            
             
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-aliquam-ante-non.html">Proident Nulla
            
            	<span class="megamenu-label new-label" >New</span>
            
            
            
             
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-justo-condimentum.html">Phasellus Leo
            
            
            
             
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/gravida-est-quis-euismod.html">Tristique Amet
            
            
            
             
            </a>
          </li>
          
        </ul>
      </li>
	  
      
      <li>
        
        <ul>
          <li class="list-title">Collection Links</li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/curabitur-cursus-dignis.html">Dolorem Sed
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-aliquam-ante-non.html">Proident Nulla
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-justo-condimentum.html">Phasellus Leo
            
            
            
            	<span class="megamenu-label sale-label" >Sale</span>
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/gravida-est-quis-euismod.html">Tristique Amet
            
            
            
            
            </a>
          </li>
          
        </ul>
      </li>
	  
      
      <li>
        
        <ul>
          <li class="list-title">Collection Links</li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/curabitur-cursus-dignis.html">Dolorem Sed
            
            	<span class="megamenu-label new-label" >New</span>
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-aliquam-ante-non.html">Proident Nulla
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-justo-condimentum.html">Phasellus Leo
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/gravida-est-quis-euismod.html">Tristique Amet
            
            
            	<span class="megamenu-label hot-label" >Hot</span>
            
            
            
            </a>
          </li>
          
        </ul>
      </li>
      
      
      
    </ul>
  </div>

  
</li>






        
        


<li class="dropdown mega-menu">
  <a href="collections/all.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
    <span>Pages</span>
    
    <i class="fa fa-caret-down"></i>
    
    <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
    <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
  </a>
  
  <div class="megamenu-container megamenu-container-2 dropdown-menu banner-right mega-col-2">
    
    <ul class="sub-mega-menu">
      
      <li>
        
        <ul>
          <li class="list-title">Page Layout</li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="collections/bracelets.html">Collection full width
            
            
            
            
            </a>            
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="collections/sample-collection-with-left-slidebar.html">Collection - left sidebar
            
            
            
            
            </a>            
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="collections/sample-collection-with-right-slidebar.html">Collection - right sidebar
            
            
            
            
            </a>            
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/donec-aliquam-ante-non.html">Product full width
            
            
            
            
            </a>            
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/product-with-left-slidebar.html">Product - left sidebar
            
            
            
            
            </a>            
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="products/product-with-right-slidebar.html">Product - right sidebar
            
            
            
            
            </a>            
          </li>
          
        </ul>
      </li>
      
      
      <li>
        
        <ul>
          <li class="list-title">Page Content</li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="pages/about-us.html">About
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="pages/price-table.html">Price table
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="pages/faqs.html">FAQs
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="pages/testimonials.html">Testimonial
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="collections/all.html">New product introduction
            
            
            
            
            </a>
          </li>
          
          <li class="list-unstyled li-sub-mega">
            <a href="pages/contact.html"> Contact
            
            
            
            
            </a>
          </li>
          
        </ul>
      </li>
	  
      
      
      
      
    </ul>     
  </div>
  
</li>






        
        




<li class="nav-item dropdown">
  <a href="blogs/blogs.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">

    <span>Blog</span>
    
    <i class="fa fa-caret-down"></i>
    

    <i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
    <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
  </a>
  <ul class="dropdown-menu">
    
    

<li class=""><a tabindex="-1" href="blogs/sample-blog-with-grid-3-columns.html">Blog grid 3 columns</a></li>


    
    

<li class="divider"></li>
<li class=" dropdown sub-link">Blog grid 2 columns
  <ul class="dropdown-menu">
    
    

<li class="active"><a tabindex="-1" href="index.html">Test 1</a></li>


    
    

<li class="active"><a tabindex="-1" href="index.html">Test 1</a></li>


    
    

<li class="active"><a tabindex="-1" href="index.html">Test 1</a></li>


    
    

<li class="active"><a tabindex="-1" href="index.html">Test 1</a></li>


    
  </ul>
</li>


    
    

<li class=""><a tabindex="-1" href="blogs/sample-blog-full-width.html">Blog grid full width</a></li>


    
    

<li class=""><a tabindex="-1" href="blogs/sample-blog-with-left-slidebar.html">Blog - left sidebar</a></li>


    
    

<li class=""><a tabindex="-1" href="blogs/sample-blog-full-width.html">Blog - right sidebar</a></li>


    
    

<li class=""><a tabindex="-1" href="blogs/blogs/44831811-sample-blog-post-full-width.html">Post full width</a></li>


    
    

<li class=""><a tabindex="-1" href="blogs/blogs/47648387-sample-blog-post-with-left-slidebar.html"> Post - left sidebar</a></li>


    
    

<li class=""><a tabindex="-1" href="blogs/blogs/44831939-vel-illum-qui-dolorem-eum-fugiat.html">Post - right sidebar</a></li>


    
  </ul>
</li>






        
        




<li class="nav-item">
  <a href="pages/contact.html">
    <span>Contact</span>
  </a>
</li>






        
      </ul>       -->
    </div>
  </div>
</nav>

      </li>

      
      <li class="top-search hidden-xs">
        <div class="header-search">
            <a href="#">
              <span data-toggle="dropdown">
                <i class="fa fa-search"></i>
                <i class="sub-dropdown1"></i>
                <i class="sub-dropdown"></i>
              </span>
            </a>
            <form id="header-search" class="search-form dropdown-menu" action="s.php" method="get">
              <input type="hidden" name="type" value="product" />
              <input type="text" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something..." />
              <button type="submit" class="btn">Search</button>
            </script>
              <script>
  	function getXMLHTTP()
 {
	 var xmlhttp=false;
	 xmlhttp=new XMLHttpRequest();//Create an XMLHTTPRequest object
	 return xmlhttp;
 }
 

	
 function dis(nm)
 {
	 var path="s.php?name="+nm;
	 
	 var req=getXMLHTTP();
	
	 if(req)
	 {
		 req.onreadystatechange=function()
		 {
			 if(req.readyState==4)
			 {	
				 if(req.status==200)
				 
				 {
					 document.getElementById("sd").innerHTML=req.responseText;
				 }
			 }
		 }
		 
		 req.open("GET",path,true);
		 req.send();

	 
 }	}
  </script>
            </form>
          </div>
      </li>    
      <li class="umbrella hidden-xs">			
        <div id="umbrella" class="list-inline unmargin">
          <div class="cart-link">
            <a href="cart.php" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
              <i class="sub-dropdown1"></i>
              <i class="sub-dropdown"></i>   
               <i class="fa fa-shopping-cart"></i>
              <!--<div class="num-items-in-cart">-->
                 
                <!--<span class="icon">-->
                  
                  <span class="number"><?php echo $num_rows;?></span>
                <!--</span>-->
              <!--</div>-->
            </a>            
<!--            <div id="cart-info" class="dropdown-menu">
              <div id="cart-content">
                <div class="loading">
                  <img src="cdn.shopify.com/s/files/1/0908/7252/t/2/assets/loaderf4b4.gif?1309057467802046266" alt="" />
                </div>
              </div>
            </div>            -->
          </div>
        </div>
      </li>       
      <li class="mobile-search visible-xs">
        <form id="mobile-search" class="search-form" action="https://cs-utc-jewelry.myshopify.com/search" method="get">
          <input type="hidden" name="type" value="product" />
          <input type="text" class="" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something..." />         
          <button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>          
        </form>
      </li>       
    </ul>
  </div>
</div>
<!--End Navigation-->


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
  </header>