<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<div class="content-wrapper" style="min-height: 916.3px;">
    <div class="box">
        <section class="content-header">
            <h1>
                Category 
            </h1>
            <ol class="breadcrumb">
                <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="category/categorylist.php" title="Category">Category</a></li>

            </ol>
        </section>


        <!-- /.box-header -->
        <div class="box-body">

            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <a href="category/addcategory.php"><button type="add" name="add" class="btn btn-primary pull-right">Add</button></a>
                <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.05px;" aria-label="Browser: activate to sort column ascending">Id</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.017px;" aria-label="Browser: activate to sort column ascending">Image</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Category Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>

                                <?php
                                //database connection
                                include('../config.php');

                                //data listing 
                                $data = "select category_name,category_id,status,image from category ORDER BY (category_id) DESC ";
                                $result = $conn->query($data);

                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                    if (file_exists($row["image"])) {

                                        $path = 'category/' . $row["image"];
                                    } else {

                                        $path = 'category/picture/noimage.jpg';
                                    }
                                    
                                    $status = ucfirst($row['status']);
                                    if ($status == 'Enable') {
                                        $class = 'btn btn-success';
                                        $confirm = "Are you sure you want to Disable this category?";
                                    } else {
                                        $class = 'btn btn-danger';
                                        $confirm = "Are you sure you want to Enable this category?";
                                    }
                                    echo"<tr >		
	    <td>$i.</td>
            <td><img src='$path' height='70px' width='70px'</td> 
            <td>$row[category_name]</td>
	    <td><a href='category/changestatus.php?category_id=$row[category_id]&status=$row[status]' class='$class' onclick=\"return confirm('$confirm')\"><span class=''>$status</span></a>
	    <td><a href='category/editcategory.php?category_id=$row[category_id]' class='btn btn-success' title=Edit><span class='fa fa-pencil'></span></a>
            <a href='category/categorydelete.php?category_id=$row[category_id]' onclick=\"return confirm('Are you sure you want to delete this category?')\" class='btn btn-danger'><span class='fa fa-trash' title=Delete></span></a></td>
            </tr>";
                                    $i++;
                                }

                                $conn->close();
                                ?>

                            </tbody>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Id</th><th rowspan="1" colspan="1">Image</th><th rowspan="1" colspan="1">Category Name</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Action</th></tr>
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
