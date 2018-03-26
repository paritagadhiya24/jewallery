<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Order 
        </h1>
        <ol class="breadcrumb">
            <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Order</a></li>
            
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
                        <h3 class="box-title">Add Order </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="order/orderinsert.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="order_no" class="col-sm-2 control-label">Order No</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="order_no" placeholder="Enter orderno" name="order_no" >
                                </div>
                            </div>
                            
                   <div class="form-group">
                  <label for="user_name" class="col-sm-2 control-label">user_name:</label>
                  <div class="col-sm-10">     
                      <select class="form-control" id="category_name" name="customer_id" required="">
                   <?php
                //database connection
                include('../config.php');
                  $result = "SELECT * FROM  customer";
                  $result1 = $conn->query($result);
                //  echo '<pre>'; print_r($result1);die();  
                   while ($row = mysqli_fetch_array($result1)) {                                  
    echo "<option value='" . $row['customer_id']. "'>" . $row['user_name'] ."</option>";
      //echo '<pre>'; print_r($result1);die();
                       
                   }
                $conn->close();
                ?>          
                        
                    </select>
                  </div>
                  </div>            
                   <div class="form-group">
                  <label for="product_name" class="col-sm-2 control-label">product_name:</label>
                  <div class="col-sm-10">     
                      <select class="form-control" id="product_name" name="product_id" required="">
                   <?php
                //database connection
                include('../config.php');
                  $result = "SELECT * FROM  product";
                  $result1 = $conn->query($result);
                //  echo '<pre>'; print_r($result1);die();  
                   while ($row = mysqli_fetch_array($result1)) {                                  
    echo "<option value='" . $row['product_id']. "'>" . $row['product_name'] ."</option>";
      //echo '<pre>'; print_r($result1);die();
                       
                   }
                $conn->close();
                ?>          
                        <!--<option value=1>Man</option>-->
                        <!--<option value=2>Women</option>-->
                    </select>
                  </div>
                  </div>

                            <div class="form-group">
                                <label for="quantity" class="col-sm-2 control-label">Quantity</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="servicetax" class="col-sm-2 control-label">Service Tax</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="servicetax" placeholder="Enter servicetax" name="servicetax" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="netprice" class="col-sm-2 control-label">Netprice</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="netprice" placeholder="Enter netprice" name="netprice" >
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
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