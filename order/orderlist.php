<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<div class="content-wrapper" style="min-height: 916.3px;">
    <div class="box">
        <section class="content-header">
            <h1>
                order List
            </h1>
            <ol class="breadcrumb">
                <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="order/order.php">order</a></li>

            </ol>
        </section>


        <!-- /.box-header -->
        <div class="box-body">

            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Id</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Customer Id</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Product Id</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Quantity</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Netprice</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>

                                <?php
                                //database connection
                                include('../config.php');

                                //data listing 
                                $data = "select *  from `order` ORDER BY order_id DESC ";
                                $result= $conn->query($data);
                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                echo"<tr >		
                                        <td>$i.</td>
                                        <td>$row[customer_id]</td>
                                        <td>$row[product_id]</td>                                                                                                                      
                                        <td>$row[quantity]</td>                                        
                                        <td>$row[netprice]</td>

                                        <td><a href='#' onclick=\"return confirm('Are you sure you want to delete this order?')\" class='btn btn-danger'><span class='fa fa-trash'></span></a></td>
                                    </tr>";
                                    $i++;
                                }
                                $conn->close();
                                ?>

                            </tbody>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Id</th><th rowspan="1" colspan="1">Customer Id</th><th rowspan="1" colspan="1">Product Id</th><th rowspan="1" colspan="1">Quantity</th><th rowspan="1" colspan="1">Netprice</th><th rowspan="1" colspan="1">Action</th></tr>
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
