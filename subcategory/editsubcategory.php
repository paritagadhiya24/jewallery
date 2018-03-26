<?php include('../header.php');?>
<?php include('../leftmenu.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<?php
    // database connection
    include('../config.php'); 
    if (isset($_POST['update'])) { 
    //For update query
    $subcategory_name = $_POST['subcategory_name'];
    $category_id = $_POST['category_id'];
    $status = $_POST['status'];
    $subcategory_id = $_POST['subcategory_id'];
    $que = "update subcategory set subcategory_name='$subcategory_name',category_id='$category_id', status='$status' where subcategory_id='$subcategory_id'";
//    echo $que;die;
    $result = $conn->query($que);
//   echo "<pre>";print_r($que);die;
     // redirection for userdetail form view
    echo("<script>location.href = 'subcategory/subcategorylist.php';</script>");
         
    } else {  
        // left join query
     //echo "<pre>";print_r($sql);die; 
      $sql="SELECT category.category_name FROM category INNER JOIN subcategory ON category.category_id = subcategory.category_id; ";
     $subcategory_id = $_GET['subcategory_id'];      
      $sql = "SELECT * from subcategory where subcategory_id=$subcategory_id"; 
    $result = $conn->query($sql);
    } 
    while ($row = mysqli_fetch_array($result)) {
        $subcategory_name = $row['subcategory_name'];
        $status = $row['status'];
        $category_id = $row['category_id'];
     }
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Subcategory         
      </h1>
      <ol class="breadcrumb">
        <li><a href="#" title="Dashboard" ><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="subcategory/subcategorylist.php" title="Category">Subcategory</a></li>
        <li class="active" title="Edit">Edit</li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
<!--        <div class="col-md-1">
        </div>-->
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Subcategory </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form method="post" class="form-horizontal">
              <div class="box-body">
                  <input type="hidden" name="update" value="1" >
                <input type="hidden" name="subcategory_id" value="<?php echo $subcategory_id; ?>">
                 <div class="form-group">
                  <label for="category_name" class="col-sm-2 control-label">Category Name:</label>
                  <div class="col-sm-10">     
                      <select class="form-control" id="category_id" name="category_id" required="" value="<?php echo $category_name; ?>">
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
                      <input type="text" class="form-control" id="category_name" placeholder="Enter subcategory name" name="subcategory_name"   pattern="[a-zA-Z0-9]*" required="" value="<?php echo $subcategory_name; ?>">
                   
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status:</label>

                  <div class="col-sm-10">
                    
                      <select class="form-control" id="status" name="status" required="" <?php echo $status; ?>>
                        <option value="enable" <?php if($status =='enable')
                            {
                                echo "selected";
                            }
                            ?>>Enable</option>
                        <option value="disable" <?php if($status =='disable')
                            {
                                echo "selected";
                            }
                            ?>>Disable</option>
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
          <!-- /.box -->
         
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('../footer.php');?>