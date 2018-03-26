<?php include('./header.php'); ?>    
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
            <!--<i class="fa fa-user"></i>-->
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
    // database connection
    include('../config.php');

    if (isset($_POST['update'])) {
        
        //upload image
        $upload_dir = 'picture/';
        $tmp_name = $_FILES["image"]["tmp_name"];
        $name = $upload_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($tmp_name, $name);
                
        //For update query
//        echo "<pre>";print_r($_FILES);die;
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $phone_number = $_POST['phone_number'];
        $customer_id = $_POST['customer_id'];
        //$image = $_POST['image'];
        if($_FILES["image"]["name"] == '') {
                    $que = "update customer set first_name='$first_name',last_name='$last_name',user_name='$user_name', email='$email',password='$password',gender='$gender',date_of_birth='$date_of_birth',address='$address',city='$city',state='$state',country='$country',pincode='$pincode',phone_number='$phone_number' where customer_id='$customer_id'";
                } else {
                    $que = "update customer set first_name='$first_name',last_name='$last_name',user_name='$user_name', email='$email',password='$password',gender='$gender',date_of_birth='$date_of_birth',address='$address',city='$city',state='$state',country='$country',pincode='$pincode',phone_number='$phone_number',image='$name' where customer_id='$customer_id'";
                }

//echo $que;die;
        $result = $conn->query($que);
//echo "<pre>";print_r($_POST);die;
        // redirection for userdetail form view
        echo("<script>location.href = 'editprofile.php';</script>");
//        header('location:product/productlist.php');
    } else {
        $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';
//        $customer_id = $_GET['customer_id'];
        $sql = "SELECT * from customer where customer_id=$customer_id";

        $result = $conn->query($sql);
    }

    while ($row = mysqli_fetch_array($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $user_name = $row['user_name'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $date_of_birth = $row['date_of_birth'];
        $address = $row['address'];
        $city = $row['city'];
        $state = $row['state'];
        $country = $row['country'];
        $pincode = $row['pincode'];
        $phone_number = $row['phone_number'];
        $image = $row['image'];
    }
    ?>
     <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Edit Customer </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                  <form method="post" class="form-horizontal" enctype="multipart/form-data" />
                  <div class="box-body">
                      <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
                <div class="form-group">
                  <label for="first_name" class="col-sm-2 control-label">First Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $first_name; ?>">
                   
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="last_name" class="col-sm-2 control-label">Last Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $last_name; ?>">
                   
                  </div>
                </div> 
                  
                <div class="form-group">
                  <label for="user_name" class="col-sm-2 control-label">User Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="user_name" placeholder="Enter user name" name="user_name"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $user_name; ?>">
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"  value="<?php echo $email; ?>">
                   
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password:</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $password; ?>">
                   
                  </div>
                  </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender:</label>
                    <input type="radio" name="gender" value="male" <?php echo($gender == 'male') ? "checked" : ""; ?>> Male
                    <input type="radio" name="gender" value="female" <?php echo($gender == 'female') ? "checked" : ""; ?>> Female<br>

                </div>
                 <div class="form-group">
                  <label for="date_of_birth" class="col-sm-2 control-label">Date of birth:</label>
                    <div class="col-sm-10">  
                        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                        <link rel="stylesheet" href="/resources/demos/style.css">
                        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                            <script>
                            $( function() {
                              $( "#datepicker" ).datepicker({
                                changeMonth: true,
                                changeYear: true
                              });
                            } );
                            </script>
                        <input type="text" id="datepicker" name="date_of_birth" value="<?php echo $date_of_birth; ?>">
                        
                  </div>
                </div>
                   
                  
                </div>
                  <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $address; ?>">
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="city" class="col-sm-2 control-label">City:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $city; ?>">
                   
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="state" class="col-sm-2 control-label">State:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $state; ?>">
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="country" class="col-sm-2 control-label">Country:</label>
                   <div class="col-sm-10">
                    <select class="form-control" id="country" name="country" required="" value="<?php echo $country; ?>">
                       <option value="Canada" <?php
                                        if ($country == 'canada') {
                                            echo "selected";
                                        }
                                        ?>>Canada</option>
                       <option value="USA" <?php
                                        if ($country == 'USA') {
                                            echo "selected";
                                        }
                                        ?>>USA</option>
                       <option value="India" <?php
                                        if ($country == 'India') {
                                            echo "selected";
                                        }
                                        ?>>India</option>
                       <option value="China" <?php
                                        if ($country == 'China') {
                                            echo "selected";
                                        }
                                        ?>>China</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="pincode" class="col-sm-2 control-label">Pincode:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $pincode; ?>">
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="phone_number" class="col-sm-2 control-label">Phone No:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone_number" placeholder="Enter phone_number" name="phone_number"   pattern="[0-9]*" required="" value="<?php echo $phone_number; ?>">
                   
                  </div>
                </div>
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                    <input type="file"  id="image" placeholder="select image" name="image" value="<?php echo $image; ?>">
                 </div> 
                  </div>     
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <button type="cancel" name="cancel" class="btn btn-primary">Cancel</button>   
               <button type="submit" name="update" class="btn btn-primary">Submit</button>
                <!--<input type="submit" name="cancel" value="cancel"> do not require anything-->
                    
              </div>
              <!-- /.box-footer -->
            </form>

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