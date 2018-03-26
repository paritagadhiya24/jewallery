<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
        echo("<script>location.href = 'customer/customerlist.php';</script>");
//        header('location:product/productlist.php');
    } else {
        $customer_id = $_GET['customer_id'];
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Customer 

        </h1>
        <ol class="breadcrumb">
            <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="customer/customerlist.php" title="Product">Customer</a></li>
            <li class="active" title="Edit">Edit  </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!--        <div class="col-md-2">
                    </div>-->
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

                <!-- Horizontal Form -->
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
                      <input type="text" class="form-control" id="user_name" placeholder="Enter user name" name="user_name"   pattern="[a-z A-Z0-9]*" required="" value="<?php echo $user_name; ?>">
                   
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
                      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"   pattern="[a-z A-Z0-9]*" required="" value="<?php echo $address; ?>">
                   
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
               <button type="cancel" name="cancel" class="btn btn-primary pull-left">Cancel</button>   
               <button type="submit" name="update" class="btn btn-primary pull-right">Submit</button>
                <!--<input type="submit" name="cancel" value="cancel"> do not require anything-->
                    
              </div>
              <!-- /.box-footer -->
            </form>

                </div>
                <!-- /.box -->

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../footer.php'); ?>