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
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Product 

        </h1>
        <ol class="breadcrumb">
            <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="product/productlist.php">Product</a></li>
            <li class="active">Add </li>
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
                        <h3 class="box-title">Add Product </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <!--<form class="form-horizontal"  action="insert.php" method="post">-->
                    <form class="form-horizontal" action="product/insert.php" method="post" enctype="multipart/form-data">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="productname" class="col-sm-2 control-label">Product Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Productname" placeholder="Enter Product name" name="productname"  pattern="[a-zA-Z 0-9]*" required="" >
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
                            </div>
                            <!--                            <div class="form-group">
                                                            <label for="material" class="col-sm-2 control-label"> Material</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="material" placeholder="Enter Product Material" name="material"   pattern="[a-zA-Z 0-9]*" required="">
                                                            </div>
                                                        </div>-->
                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label"> price</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="price" placeholder="Enter Product price" name="price"   pattern="[0-9]*" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="status" name="status"  pattern="[a-zA-Z 0-9]*" required="">
                                        <option value="enable">Enable</option>
                                        <option value="disable">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Productquantity" placeholder="Enter Product quantity" name="quantity"  pattern="[0-9]*" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="carat" class="col-sm-2 control-label">Carat</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="status" name="carat"  pattern="[a-zA-Z 0-9]*" required="">
                                        <option value="9k">9k</option>
                                        <option value="10k">10k</option>
                                        <option value="14k">14k</option>
                                        <option value="18k">18k</option>
                                        <option value="22k">22k</option>
                                        <option value="24k">24k</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="weight" class="col-sm-2 control-label">Weight</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="weight" placeholder="Enter Product weight" name="weight"  pattern="[0-9]*" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_description" class="col-sm-2 control-label">Product Description</label>

                                <div class="col-sm-10">                                    
                                     <textarea name="product_description" id="product_description" rows="10" cols="80">
               
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
                                <input type="file"  id="image" placeholder="select image" name="image" >
                            </div>  

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="cancel" name="cancel" class="btn btn-primary pull-left">Cancel</button> 
                            <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
                             <!--<input type="submit" name="cancel" value="cancel">do not require anything-->
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

