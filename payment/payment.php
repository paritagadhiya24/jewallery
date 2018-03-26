<?php include('../header.php'); ?>
<?php include('../leftmenu.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Transaction
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Transaction</a></li>
            
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Transaction </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="payment/paymentinsert.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="amount" class="col-sm-2 control-label">Amount</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="status" name="status">
                                        <option value="enable">Success</option>
                                        <option value="disable">fail</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
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