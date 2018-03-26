<?php include('./header.php'); ?>   
<?php
//session_start();
include('../config.php');
if(isset($_POST['Submit']))
    //echo "<pre>"; print_r($_POST);die(); 
{
     $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';
    if ($customer_id == '') {
        
    } 
$oldpass=($_POST['opwd']);
// $con_password=$_POST['cpwd'];
 //$useremail=($_POST['login']);
$newpassword=$_POST['npwd'];
$cnewpassword=$_POST['cpwd'];
if( $newpassword != $cnewpassword)
{
    echo"New Password not match with Confirm Password!!";
     //$_SESSION['scmsg'] ="New Password not match with Confirm Password!!";
}
else
{
    $sql1="SELECT * FROM `customer` where customer_id=$customer_id && password=$oldpass";
    //echo "<pre>"; print_r($sql1);die(); 
    $result =  mysqli_query($conn, $sql1);
    //echo "<pre>"; print_r($result);die();
    if (mysqli_num_rows($result) > 0) 
    {
        //if($newpassword=$con_password){
        //if($data_pwd==$old_password)  
     $sql="update customer set password='$newpassword' where customer_id=$customer_id ";
     //echo "<pre>"; print_r($sql);die();
     $result =  mysqli_query($conn, $sql);

   // echo"<script>'alert(Password Changed Successfully !!)'</script>";
    echo '<script language="javascript">';
    echo 'alert("Password Succesfully Changrd...")';
    echo '</script>';
      //$_SESSION['scmsg']="Password Changed Successfully !!";
    }
    else
    {
   echo"Old Password not match !!";
     //$_SESSION['scmsg']="Old Password not match !!";
        
    }
}
}
//}
  // }
?>
            <div id="cart-info" class="dropdown-menu">
              <div id="cart-content">
                <div class="loading">
                  <!--<img src="//cdn.shopify.com/s/files/1/0908/7252/t/2/assets/loader.gif?15051162468902546095" alt="" />-->
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </li>      
      <li class="mobile-search visible-xs">
        <form id="mobile-search" class="search-form" action="/search" method="get">
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
    
      <div class="col-md-24">
        <a href="/" class="homepage-link" title="Back to the frontpage">Home</a>
        
        <span>/</span>
        <span class="page-title">Account</span>
        
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
  
  <form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Old Password :</td>
<td><input type="password" name="opwd" id="opwd"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="index.php">Back to login Page</a></td>
<td><input type="submit" name="Submit" onclick="show_message()"value="Change Passowrd" /></td>
</tr>
 </table>
</form>      
    
    <div><center>

            <div id="info-left" class="breadcrumb" style="display: none">
                <!--<div itemprop="breadcrumb" class="container">-->
                <div class="info-left">
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
          
          

        </section>        
      </div>
    </div>
  </div>

<?php include('./footer.php'); ?>