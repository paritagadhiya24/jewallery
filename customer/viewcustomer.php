<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            View 

        </h1>
        <ol class="breadcrumb">
            <li><a href="#" title=Dashboard><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="customer/customerlist.php">Customer</a></li>
            <li class="active">View</li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> AdminLTE, Inc.
                    <small class="pull-right">Date: 2/10/2014</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            <?php
                //database connection
                include('../config.php');
                $customer_id = $_GET['customer_id'];
                $data = "SELECT * FROM customer WHERE customer_id IN ($customer_id) ";
                $result = $conn->query($data);
                while ($row = mysqli_fetch_array($result)) {
                    if (file_exists($row["image"])) {

                    $path = 'customer/' . $row["image"];
                } else {

                    $path = 'customer/picture/noimage.jpg';
                }
                    echo"<tr >	
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='$path' height='200px' width='200px'</td> 
	                 </tr>";
                }
                $conn->close();
                ?>
                
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <?php
                //database connection
                include('../config.php');
                $customer_id = $_GET['customer_id'];
                //data listing desc order
//                    $data = "select product_name,product_id,material,price,quantity,weight,carat from product ORDER BY (product_id) DESC";
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
                        
                        
                        </tr>";
                }
                $conn->close();
                ?>
             </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <?php
                //database connection
                include('../config.php');
                $customer_id = $_GET['customer_id'];
                //data listing desc order
//                    $data = "select product_name,product_id,material,price,quantity,weight,carat from product ORDER BY (product_id) DESC";
                $data = "SELECT * FROM customer WHERE customer_id IN ($customer_id) ";
                $result = $conn->query($data);
                
                while ($row = mysqli_fetch_array($result)) {
                    echo"<tr >		
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
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->


<?php include('../footer.php'); ?>