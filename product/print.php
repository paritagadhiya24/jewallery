<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
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
//                echo "<pre>";print_r($data);die;
                $result = $conn->query($data);
                echo "<pre>";print_r($result);die;
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

                $data = "SELECT * FROM product WHERE product_id IN ($product_id) ";
                $result = $conn->query($data);
                while ($row = mysqli_fetch_array($result)) {
                    echo"<tr >		
	                
                        <tr><th><b>product_name</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[product_name]</td></tr></br>
                        <tr><th><b>material</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[material]</td></tr></br>
                        <tr><th><b>price</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[price]</td></tr></br>
                        <tr><th><b>status</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[status]</td></tr></br>
                        
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
	                
                        <tr><th><b>quantity</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[quantity]</td></tr></br>
                        <tr><th><b>weight</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[weight]</td><tr></br>
                        <tr><th><b>carat</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[carat]</td></tr></br>
                        <tr><th><b>created_date</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[created_date]</td></tr>
                        <tr><th><b>updated_date</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[updated_date]</td></tr>
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

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      <div class="col-xs-6">
        

        <div class="table-responsive">
          
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
