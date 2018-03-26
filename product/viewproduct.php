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
            <li><a href="product/productlist.php">Product</a></li>
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
                $product_id = $_GET['product_id'];
                $data = "SELECT * FROM product WHERE product_id IN ($product_id) ";
                $result = $conn->query($data);
                while ($row = mysqli_fetch_array($result)) {
                    if (file_exists($row["image"])) {

                    $path = 'product/' . $row["image"];
                } else {

                    $path = 'product/picture/noimage.jpg';
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
                $product_id = $_GET['product_id'];
                //data listing desc order
//                    $data = "select product_name,product_id,material,price,quantity,weight,carat from product ORDER BY (product_id) DESC";
                $data = "SELECT * FROM product WHERE product_id IN ($product_id) ";
                $result = $conn->query($data);
                while ($row = mysqli_fetch_array($result)) {
                    echo"<tr >		
	                
                        <tr><th><b>Product Name</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[product_name]</td></tr></br>
                        
                        <tr><th><b>Price</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[price]</td></tr></br>
                        <tr><th><b>Status</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[status]</td></tr></br>
                        
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
                $product_id = $_GET['product_id'];
                //data listing desc order
//                    $data = "select product_name,product_id,material,price,quantity,weight,carat from product ORDER BY (product_id) DESC";
                $data = "SELECT * FROM product WHERE product_id IN ($product_id) ";
                $result = $conn->query($data);
                
                while ($row = mysqli_fetch_array($result)) {
                    echo"<tr >		
	                
                        <tr><th><b>Quantity</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[quantity]</td></tr></br>
                        <tr><th><b>Weight</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[weight]</td><tr></br>
                        <tr><th><b>Carat</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[carat]</td></tr></br>
                        
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
            <div class="col-xs-12">
                
                <!--<a href='product/print.php?product_id="'<?php echo $row[product_id]?>'" target="_blank" class="btn btn-default"'><i class="fa fa-print"></i> Print</a>-->
                
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->


<?php include('../footer.php'); ?>