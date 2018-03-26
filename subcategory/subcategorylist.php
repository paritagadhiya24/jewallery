<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<div class="content-wrapper" style="min-height: 916.3px;">
    <div class="box">
        <section class="content-header">
            <h1>
                Subcategory 
            </h1>
            <ol class="breadcrumb">
                <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="subcategory/subcategorylist.php" title="Category">Subcategory</a></li>

            </ol>
        </section>


        <!-- /.box-header -->
        <div class="box-body">

            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <a href="subcategory/addsubcategory.php"><button type="add" name="add" class="btn btn-primary pull-right">Add</button></a>
                <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Id</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Category Name</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Subcategory Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                //database connection
                                include('../config.php');

                                //data listing 
                              //  $data = "select subcategory_name,category_id,subcategory_id,status from subcategory ORDER BY (subcategory_id) DESC ";
                                $data = "select subcategory.subcategory_name,subcategory.category_id,subcategory.subcategory_id,subcategory.status,category.category_name from subcategory inner join category on subcategory.category_id = category.category_id ORDER BY (subcategory_id) DESC ";           
                                $result = $conn->query($data);
                                                  // echo '<pre>'; print_r($result);die();
                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {

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
            <td>$row[category_name]</td>
            <td>$row[subcategory_name]</td>  
            
            <td><a href= 'subcategory/subchangestatus.php?subcategory_id=$row[subcategory_id]&status=$row[status]' class='$class' onclick=\"return confirm('$confirm')\"><span class=''>$status</span></a>
	    <td><a href='subcategory/editsubcategory.php?subcategory_id=$row[subcategory_id]' class='btn btn-success' title=Edit><span class='fa fa-pencil'></span></a>
            <a href='subcategory/subcategorydelete.php?subcategory_id=$row[subcategory_id]' onclick=\"return confirm('Are you sure you want to delete this subcategory?')\" class='btn btn-danger'><span class='fa fa-trash' title=Delete></span></a></td>
            </tr>";
                                    $i++;
                                }

                                $conn->close();
                                ?>

                            </tbody>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Id</th><th rowspan="1" colspan="1">Subcategory Name</th><th rowspan="1" colspan="1">Category Name</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Action</th></tr>
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
