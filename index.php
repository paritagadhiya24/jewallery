<?php include('./header.php');?>
<?php include('./leftmenu.php');?>
  
<div class="content-wrapper" style="min-height: 916.3px;">
 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          &nbsp;&nbsp;&nbsp;&nbsp;

          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                //database connection
                include('./config.php');
                  $result = "SELECT * FROM product";
                  $result1 = $conn->query($result);
                  $num_rows = mysqli_num_rows($result1);
                //echo "$num_rows Rows\n";
                $conn->close();
                ?>
                //echo "$num_rows Rows\n";
   
                 <h3><?php echo $num_rows;?><sup style="font-size: 20px"></sup></h3>

              <p>Product Name</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
              <a href="product/productlist.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> 
    <div class="col-lg-3 col-xs-6">
        &nbsp;&nbsp;&nbsp;&nbsp;
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                //database connection
                include('./config.php');
                  $result = "SELECT status FROM product where status='disable'";
                  $result1 = $conn->query($result);
                  $num_rows = mysqli_num_rows($result1);
               
                $conn->close();
                ?>
                 <h3><?php echo $num_rows;?><sup style="font-size: 20px"></sup></h3>

              <p>Product Disable</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="product/productlist.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <div class="col-lg-3 col-xs-6">
        &nbsp;&nbsp;&nbsp;&nbsp;
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                //database connection
                include('./config.php');
                  $result = "SELECT status FROM product where status='enable'";
                  $result1 = $conn->query($result);
                  $num_rows = mysqli_num_rows($result1);
               
                $conn->close();
                ?>
                 <h3><?php echo $num_rows;?><sup style="font-size: 20px"></sup></h3>

              <p>Product Enable</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="product/productlist.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <div class="col-lg-3 col-xs-6">
        &nbsp;&nbsp;&nbsp;&nbsp;
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                //database connection
                include('./config.php');
                  $result = "SELECT * FROM category";
                  $result1 = $conn->query($result);
                  $num_rows = mysqli_num_rows($result1);
               
                $conn->close();
                ?>
                 <h3><?php echo $num_rows;?><sup style="font-size: 20px"></sup></h3>

              <p>category </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
              <a href="category/categorylist.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  </div>

<?php include('./footer.php');?>
