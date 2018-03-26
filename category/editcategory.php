<?php include('../header.php');?>
<?php include('../leftmenu.php');?>

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
    $category_name = $_POST['category_name'];
    $status = $_POST['status'];
    $category_id = $_POST['category_id'];
     if($_FILES["image"]["name"] == '') {
                    $que = "update category set category_name='$category_name', status='$status'where category_id='$category_id'";
                } else {
                    $que = "update category set category_name='$category_name', status='$status',image='$name' where category_id='$category_id'";
                }
//    $que = "update category set category_name='$category_name', status='$status'where category_id='$category_id'";
    $result = $conn->query($que);
   
     // redirection for userdetail form view
    echo("<script>location.href = 'category/categorylist.php';</script>");
//        header('location:category/categorylist.php');
        
    } else {
    $category_id = $_GET['category_id'];
    $sql = "SELECT * from category where category_id=$category_id";
    
    $result = $conn->query($sql);
    }
    
    while ($row = mysqli_fetch_array($result)) {
        $category_name = $row['category_name'];
        $status = $row['status'];
     }
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#" title="Dashboard" ><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="category/categorylist.php" title="Category">Category</a></li>
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
              <h3 class="box-title">Edit Category </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data" />
             <div class="box-body">
                 <input type="hidden" name="update" value="1" >
                <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                <div class="form-group">
                  <label for=" category_name" class="col-sm-2 control-label">Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="category_name" placeholder="Enter category name" name="category_name" value="<?php echo $category_name; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    
                    <select class="form-control" id="status" name="status" <?php echo $status; ?>>
                        <option value="enable" class='btn btn-success' <?php if($status =='enable')
                            {
                                echo "selected";
                            }
                            ?>>Enable</option>
                        <option value="disable" class='btn btn-danger' <?php if($status =='disable')
                            {
                                echo "selected";
                            }
                            ?>>Disable</option>
                    </select>
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
                  <a href="category/categorylist.php"></a> <button type="submit" class="btn btn-default">Cancel</button>
                  <a href="category/categorylist.php"> <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button></a>
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