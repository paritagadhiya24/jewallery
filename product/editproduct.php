<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<script type="text/javascript">
    
      function getSubCat(cat_id) {
            loadDoc(cat_id);
        }
    function loadDoc(cat_id) {
//            alert('ih');
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    // document.getElementById("demo").innerHTML = this.responseText;
//                    alert(this.responseText);
                    $('#subcat_id').html('');
                    $('#subcat_id').html(this.responseText);
                }
            };
            xhttp.open("GET", "product/ajax.php?category_id="+cat_id, true);
            xhttp.send();
        }
</script>

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
//        echo "<pre>";print_r($_POST);die;
        $product_name = $_POST['product_name'];
        $subcategory_id = $_POST['subcategory_id'];
        $category_id = $_POST['category_id'];
//        $material = $_POST['material'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $quantity = $_POST['quantity'];
        $carat = $_POST['carat'];
        $weight = $_POST['weight'];
        $product_description = $_POST['product_description'];
        $product_id = $_POST['product_id'];
        //$image = $_POST['image'];
        if($_FILES["image"]["name"] == '') {
                    $que = "update product set product_name='$product_name', subcategory_id='$subcategory_id',category_id='$category_id',price='$price',status='$status',quantity='$quantity',carat='$carat',weight='$weight',product_description='$product_description' where product_id='$product_id'";
                } else {
                    $que = "update product set product_name='$product_name', subcategory_id='$subcategory_id',category_id='$category_id',price='$price',status='$status',quantity='$quantity',carat='$carat',weight='$weight',image='$name',product_description='$product_description' where product_id='$product_id'";
                }
//        $que = "update product set product_name='$product_name', material='$material',price='$price',status='$status',quantity='$quantity',carat='$carat',weight='$weight' where product_id='$product_id'";
//echo $que;die;
        $result = $conn->query($que);
//echo "<pre>";print_r($_POST);die;
        // redirection for userdetail form view
        echo("<script>location.href = 'product/productlist.php';</script>");
//        header('location:product/productlist.php');
    } else {
        $product_id = $_GET['product_id'];
        $sql = "SELECT * from product where product_id=$product_id";

        $result = $conn->query($sql);
    }

    while ($row = mysqli_fetch_array($result)) {
        $product_name = $row['product_name'];
//        $product_name = $row['category_name'];
//        $product_name = $row['subcategory_name'];
//        $material = $row['material'];
        $price = $row['price'];
        $status = $row['status'];
        $quantity = $row['quantity'];
        $carat = $row['carat'];
        $weight = $row['weight'];
        $product_description = $row['product_description'];
        $image = $row['image'];
    }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Product 

        </h1>
        <ol class="breadcrumb">
            <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="product/productlist.php" title="Product">Product</a></li>
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
                        <h3 class="box-title"> Edit Product </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" class="form-horizontal" enctype="multipart/form-data" />
                        <div class="box-body">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <div class="form-group">
                                <label for="productname" class="col-sm-2 control-label">Product Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="product_name" placeholder="Enter Product name" name="product_name" value="<?php echo $product_name; ?>">
                                </div>
                            </div>
                          
                        
                            <div class="form-group">
                                <label for="category_name" class="col-sm-2 control-label">Category Name:</label>
                                <div class="col-sm-10">     
                                    <select onchange="getSubCat(this.value)" class="form-control" id="category123" name="category_id" required="">
                                        <option value="">Select category</option>
                                        <?php
                                        //database connection
                                        include('../config.php');
                                        $result = "SELECT * FROM  category";
                                        $result1 = $conn->query($result);
                                        //  echo '<pre>'; print_r($result1);die();  
                                        while ($row = mysqli_fetch_array($result1)) {
                                            echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
                                            //echo '<pre>'; print_r($result1);die();
                                        }
                                        $conn->close();
                                        ?>          

                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="subcategory_name" class="col-sm-2 control-label">subCategory Name:</label>
                                <div class="col-sm-10" id="subcat_id">     

                                </div>
                            
                            <!--                            <div class="form-group">
                                                            <label for="material" class="col-sm-2 control-label"> Material</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="material" placeholder="Enter Product Material" name="material"   pattern="[a-zA-Z 0-9]*" required="">
                                                            </div>
                            
//                //database connection
//                include('../config.php');
//                  $result = "SELECT * FROM  subcategory GROUP BY subcategory_name";
//                  $result1 = $conn->query($result);
//                //  echo '<pre>'; print_r($result1);die();  
//                   while ($row = mysqli_fetch_array($result1)) {                                  
//    echo "<option value='" . $row['subcategory_id']. "'>" . $row['subcategory_name'] ."</option>";
//      //echo '<pre>'; print_r($result1);die();
//                       
//                   }
//                $conn->close();
//                ?>          
                        <!--<option value=1>Man</option>-->
                        <!--<option value=2>Women</option>-->
                    </select>
                  </div>
                  </div>
                            
<!--                            <div class="form-group">
                                <label for="material" class="col-sm-2 control-label">Material</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Product_material" placeholder="Enter Product Material" name="material" value="<?php echo $material; ?>">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label"> price</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Product price" placeholder="Enter Product price" name="price" value="<?php echo $price; ?>" >
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
                            <div class="form-group">
                                <label for="quantity" class="col-sm-2 control-label">Quantity</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Product_quantity" placeholder="Enter Product quantity" name="quantity" value="<?php echo $quantity; ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="carat" class="col-sm-2 control-label">Carat</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="status" name="carat" value="<?php echo $carat; ?>">
                                        <option value="9k" <?php
                                        if ($carat == '9k') {
                                            echo "selected";
                                        }
                                        ?>>9k</option>
                                        <option value="10k" <?php
                                        if ($carat == '10k') {
                                            echo "selected";
                                        }
                                        ?>>10k</option>
                                        <option value="14k" <?php
                                        if ($carat == '14k') {
                                            echo "selected";
                                        }
                                        ?>>14k</option>
                                        <option value="18k" <?php
                                        if ($carat == '18k') {
                                            echo "selected";
                                        }
                                        ?>>18k</option>
                                        <option value="22k" <?php
                                        if ($carat == '22k') {
                                            echo "selected";
                                        }
                                        ?>>22k</option>
                                        <option value="24k" <?php
                                        if ($carat == '24k') {
                                            echo "selected";
                                        }
                                        ?>>24k</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="weight" class="col-sm-2 control-label">Weight</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="weight" placeholder="Enter Product weight" name="weight"  value="<?php echo $weight; ?>">
                                </div>
                            </div>
<div>                       <div class="form-group">
                                <label for="product_description" class="col-sm-2 control-label">Product Description</label>

                                <div class="col-sm-10">                                    
                                     <textarea name="product_description" id="product_description" rows="10" cols="80" value="<?php echo $product_description; ?>">
               
                                    </textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace( 'product_description' );
                                    </script>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">Image</label>
                                <input type="file"  id="image" placeholder="select image" name="image" value="<?php echo $image; ?>">
                            </div>
                        </div>
                <div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="product/productlist.php"> <button type="button" class="btn btn-default">Cancel</button></a>
                            <button type="submit" name="update" class="btn btn-info pull-right">Update</button>
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