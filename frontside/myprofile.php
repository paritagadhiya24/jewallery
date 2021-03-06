<?php include('./header.php'); ?>    
            <div id="cart-info" class="dropdown-menu">
              <div id="cart-content">
                <div class="loading">
                  <img src="//cdn.shopify.com/s/files/1/0908/7252/t/2/assets/loader.gif?15051162468902546095" alt="" />
                </div>
              </div>
            </div>            
          </div>
        </div>
      </li>           
      <li class="mobile-search visible-xs">
        <form id="mobile-search" class="search-form" action="/search" method="get" enctype="multipart/form-data" />
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
  <div id="content-wrapper-parent">
    <div id="content-wrapper">                     
      <!-- Content -->
      <div id="content" class="clearfix">                
        <div id="breadcrumb" class="breadcrumb">
  <div itemprop="breadcrumb" class="container">
    <div class="row">
      <div class="col-md-24">
        <a href="/" class="homepage-link" title="Back to the frontpage">Home</a>        
        <span>/</span>
        <span class="page-title">Account</span>        
      </div>
    </div>
  </div>
</div>                
        <section class="content">                    
          <div class="container">
            <div class="row">
               
<div id="page-header" class="col-md-24">
  <h1 id="page-title">My Account</h1> 
</div>
<div class="col-sm-6 col-md-6 sidebar">
  <div class="group_sidebar">
  <div class="row sb-wrapper unpadding-top">
    <h6 class="sb-title">Account Details</h6>
    <span class="mini-line"></span>
    <ul id="customer_detail" class="list-unstyled sb-content">
      <li>
        <address class="clearfix">
          <div class="info">
              <?php
                //database connection
                include('../config.php');
                $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';
                $data = "SELECT * FROM customer WHERE customer_id IN ($customer_id) ";
                $result = $conn->query($data);
                while ($row = mysqli_fetch_array($result)) {
                    if (file_exists($row["image"])) {

                    $path =$row["image"];
                } else {

                    $path = 'picture/noimage.jpg';
                }
                    echo"<tr >	
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='$path' height='200px' width='200px'</td> 
	                 </tr>";
                }
                $conn->close();
                ?>
              <a href="<?php echo $path ?>" title="Browse our image">
              </a>
            <i class="fa fa-user"></i>
            <span class="address-group"> 
              <span class="author"><?php echo $_SESSION['data']['first_name'].' '.$_SESSION['data']['last_name']; ?>    </span> 
              <span class="email"><?php echo $_SESSION['data']['email']; ?> </span> 
            </span>
          </div>
          <div class="address">
            <span class="address-group"> 
              <span class="address1"><span class="phone-number"></span> </span> 
            </span>
          </div>
        </address>
      </li>
      <li>
          <button class="btn btn-1" id="view_address" onclick="window.location='myprofile.php'">MY PROFILE</button>
          <button class="btn btn-1" id="view_address" onclick="window.location='changepassword.php'">CHANGE PASSWORD</button>
          <!--<button class="btn btn-1" id="view_address" onclick="window.location='/account/addresses'">Manager Address (0)</button>-->
      </li>
    </ul>
  </div>
</div>
</div>
<div id="col-main" class="account-page col-sm-18 col-md-18 clearfix">  
  <div id="customer_orders">
     <a href="editprofile.php"><button type="add" name="add" class="btn btn-primary pull-right">Edit Profile</button></a>     
    <h6 class="sb-title">My Profile</h6>    
    <span class="mini-line"></span>
     <?php
                //database connection
                include('../config.php');
                $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';          
                $data = "SELECT * FROM customer WHERE customer_id IN ($customer_id) ";
                $result = $conn->query($data);
                while ($row = mysqli_fetch_array($result)) {
                    echo"<tr >		
                        <tr><th><b>First Name</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[first_name]</td></tr></br>
                        <tr><th><b>Last Name</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[last_name]</td></tr></br>
                        <tr><th><b>User Name</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[user_name]</td></tr></br>
                        <tr><th><b>Email</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[email]</td></tr></br>
                        <tr><th><b>Gender</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[gender]</td></tr></br>
                        <tr><th><b>Date Of Birth</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[date_of_birth]</td></tr></br>
                        <tr><th><b>Address</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[address]</td></tr></br>
                        <tr><th><b>City</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[city]</td></tr></br>
                        <tr><th><b>State</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[state]</td><tr></br>
                        <tr><th><b>Country</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[country]</td></tr></br>
                        <tr><th><b>Pincode</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[pincode]</td></tr></br>
                        <tr><th><b>Phone Number</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[phone_number]</td></tr></br> 
                        
                        </tr>";
                }
                $conn->close();
                ?>

    
  </div>
</div>  
        </div>
        </div>                    
        </section>        
      </div>
    </div>
  </div>
<?php include('./footer.php'); ?>