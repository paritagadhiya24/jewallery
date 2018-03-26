<?php include('../header.php');?>
  <?php include('../leftmenu.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Sub Category
        <small></small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li><a href="subcategory/subcategorylist.php" title="Category">Subcategory </a></li>
          <li class="active" title="Add Category">Add Subcategory </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
<!--    <div class="col-md-1">
        </div>-->
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            <!--<h3 class="box-title">Add Category</h3>-->
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form action="subcategory/subcatinsert.php" method="post" class="form-horizontal">
              <div class="box-body">
                 <div class="form-group">
                  <label for="category_name" class="col-sm-2 control-label">Category Name:</label>
                  <div class="col-sm-10">     
                      <select class="form-control" id="category_name" name="category_id" required="">
                   <?php
                //database connection
                include('../config.php');
                  $result = "SELECT * FROM  category";
                  $result1 = $conn->query($result); 
                
                   while ($row = mysqli_fetch_array($result1)) {                     
                
    echo "<option value='" . $row['category_id']. "'>" . $row['category_name'] ."</option>";
      //echo '<pre>'; print_r($result1);die();
                       
                   }
                $conn->close();
                ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="subcategory_name" class="col-sm-2 control-label">Subcategory Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="category_name" placeholder="Enter subcategory name" name="subcategory_name"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status:</label>

                  <div class="col-sm-10">
                    
                      <select class="form-control" id="status" name="status" required="">
                        <option value="enable">Enable</option>
                        <option value="disable">Disable</option>
                    </select>
                  </div>
                </div>
                 
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <button type="cancel" name="cancel" class="btn btn-primary pull-left">Cancel</button>
               <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                <!--<input type="submit" name="cancel" value="cancel"> do not require anything-->
                    
              </div>
              <!-- /.box-footer -->
            </form>
            
          </div>        
          </div> 
          <!-- /.box -->
          </section>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('../footer.php');?>