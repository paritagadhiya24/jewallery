<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<div class="content-wrapper" style="min-height: 916.3px;">
    <div class="box">
        <section class="content-header">
            <h1>
                Customer List
            </h1>
            <ol class="breadcrumb">
                <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="customer/customerlist.php" title="Customer">Customer</a></li>

            </ol>
        </section>
        <!-- /.box-header -->
        <div class="box-body">

            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <a href="customer/addcustomer.php"><button type="add" name="add" class="btn btn-primary pull-right">Add</button></a>
                <div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.02px;" aria-label="Browser: activate to sort column ascending">Id</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Profile</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">First & Last Name</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">user Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Email</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.400px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Gender</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date of birth</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.400px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Country</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">phone No</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>

                                <?php
                                //database connection
                                include('../config.php');

                                //data listing 
                                $data = "select first_name,last_name,user_name,email,gender,date_of_birth,country,phone_number,image,customer_id from customer ORDER BY (customer_id) DESC ";
                                $result = $conn->query($data);

                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                if (file_exists($row["image"])) {

                                        $path = 'customer/' . $row["image"];
                                    } else {

                                        $path = 'customer/picture/noimage.jpg';
                                    }
                                    
                                    echo"<tr >		
	    <td>$i.</td>
            <td><img src='$path' height='70px' width='70px'</td>            
            <td>$row[last_name] $row[first_name]</td>
            <td>$row[user_name]</td>
            <td>$row[email]</td>
            <td>$row[gender]</td>
            <td>$row[date_of_birth]</td>                       
            <td>$row[country]</td>            
            <td>$row[phone_number]</td>
                
	    <td><a href='customer/viewcustomer.php?customer_id=$row[customer_id]' class='btn btn-primary' title=View><span class='fa fa-eye'></span></a>
            <a href='customer/editcustomer.php?customer_id=$row[customer_id]' class='btn btn-success' title=Edit><span class='fa fa-pencil'></span></a>
            <a href='customer/customerdelete.php?customer_id=$row[customer_id]' onclick=\"return confirm('Are you sure you want to delete this customer?')\" class='btn btn-danger'><span class='fa fa-trash' title=Delete></span></a></td>
            </tr>";
                                    $i++;
                                }

                                $conn->close();
                                ?>

                            </tbody>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Id</th><th rowspan="1" colspan="1">Profile</th><th rowspan="1" colspan="1">First & Last Name</th><th rowspan="1" colspan="1">User Name</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Gender</th><th rowspan="1" colspan="1">Date of birth</th><th rowspan="1" colspan="1">Country</th><th rowspan="1" colspan="1">Phone No</th><th rowspan="1" colspan="1">Action</th></tr>
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
