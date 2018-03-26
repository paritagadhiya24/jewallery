<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<div class="content-wrapper" style="min-height: 916.3px;">
    <div class="box">
        <section class="content-header">
            <h1>
                Products 
            </h1>
            <ol class="breadcrumb">
                <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li> <a href="product/productlist.php" title="Product" class="active" title="product" >product</a> </li>

            </ol>
        </section>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <a href="product/addproduct.php"><button type="add" name="add" class="btn btn-primary pull-right">Add</button></a>
                <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Image</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Product Name</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.350px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Subcategory Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.500px;" aria-label="Platform(s): activate to sort column ascending">Category Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.5px;" aria-label="Engine version: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.300px;" aria-label="CSS grade: activate to sort column ascending">Quantity</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Status</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                //database connection
                                include('../config.php');
                                //data listing desc order                                
                                $data = "select product.product_name,product.subcategory_id,product.product_id,product.image,product.price,product.quantity,product.status,product.category_id,subcategory.subcategory_name from product inner join subcategory on product.subcategory_id = subcategory.subcategory_id ORDER BY (product_id) DESC  "; 
                                $result = $conn->query($data);                              
                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                    if (file_exists($row["image"])) {

                                        $path = 'product/' . $row["image"];
                                    } else {

                                        $path = 'product/picture/noimage.jpg';
                                    }
                                    $status = ucfirst($row['status']);
                                    if ($status == 'Enable') {
                                        $class = 'btn btn-success';
                                        $confirm = "Are you sure you want to Disable this category?";
                                    } else {
                                        $class = 'btn btn-danger';
                                        $confirm = "Are you sure you want to Enable this category?";
                                    }
                                   
                              $data1 = "select * from category where category_id = $row[category_id]";
                               $result1 = $conn->query($data1);  
                               $row1 = mysqli_fetch_array($result1);
                                    echo"<tr >		
                                    <td>$i.</td>
                                    <td><img src='$path' height='70px' width='70px'</td> 

                                    <td>$row[product_name]</td>
                                    <td>$row[subcategory_name]</td>
                                    <td>$row1[category_name]</td>
                                    <td>$row[price]</td>
                                    <td>$row[quantity]</td>                                    
                                 <td><a href= 'product/prochangestatus.php?product_id=$row[product_id]&status=$row[status]' class='$class' onclick=\"return confirm('$confirm')\"><span class=''>$status</span></a></td>
                                    <td><a href='product/viewproduct.php?product_id=$row[product_id]' class='btn btn-primary' title=View><span class='fa fa-eye'></span></a>
                                    <a href='product/editproduct.php?product_id=$row[product_id]' class='btn btn-success' title=Edit><span class='fa fa-pencil'></span></a>
                                    <a href='product/productdelete.php?product_id=$row[product_id]'onclick=\"return confirm('Are you sure you want to delete this product?')\" class='btn btn-danger'><span class='fa fa-trash' title=Delete></span></a></td>
                                    </tr>";
                                                            $i++;
                                                        }
                       $conn->close();
                                ?>
 
           
                            </tbody>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Id</th><th rowspan="1" colspan="1">Image</th><th rowspan="1" colspan="1">Product Name</th><th rowspan="1" colspan="1">Subcategory Name</th><th rowspan="1" colspan="1">Category Name</th><th rowspan="1" colspan="1">Price</th><th rowspan="1" colspan="1">Quantity</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Action</th></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <script type="text/javascript">
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
</div>

<?php include('../footer.php'); ?>
