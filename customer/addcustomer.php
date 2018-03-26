<?php include('../header.php');?>
  <?php include('../leftmenu.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Customer
        <small></small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="#" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li><a href="customer/customerlist.php" title="Customer">Customer </a></li>
          <li class="active" title="Add Customer">Add Customer </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
<!--    <div class="col-md-1">
        </div>-->
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            <!--<h3 class="box-title">Add Category</h3>-->
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form action="customer/customerinsert.php" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name" class="col-sm-2 control-label">First Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="last_name" class="col-sm-2 control-label">Last Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div> 
                  
                <div class="form-group">
                  <label for="user_name" class="col-sm-2 control-label">User Name:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="user_name" placeholder="Enter user name" name="user_name"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
                   
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password:</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div> 
                  <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender:</label>
                    <div class="col-sm-10">
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                </div>
                  </div>
                 <div class="form-group">
                  <label for="date_of_birth" class="col-sm-2 control-label">Date of birth:</label>
                    <div class="col-sm-10">  
                        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                        <link rel="stylesheet" href="/resources/demos/style.css">
                        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                            <script>
                            $( function() {
                              $( "#datepicker" ).datepicker({
                                changeMonth: true,
                                changeYear: true
                              });
                            } );
                            </script>
                        <input type="text" id="datepicker" name="date_of_birth">
                        
                  </div>
                </div>
                  <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="city" class="col-sm-2 control-label">City:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="state" class="col-sm-2 control-label">State:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="country" class="col-sm-2 control-label">Country:</label>
                   <div class="col-sm-10">
                    <select class="form-control" id="country" name="country" required="">
                       <option value="Canada">Canada</option>
                       <option value="USA">USA</option>
                       <option value="India">India</option>
                       <option value="China">China</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="pincode" class="col-sm-2 control-label">Pincode:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode"   pattern="[a-zA-Z0-9]*" required="" >
                   
                  </div>
                </div>
                  <div class="form-group">
                  <label for="phone_number" class="col-sm-2 control-label">Phone No:</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone_number" placeholder="Enter phone_number" name="phone_number"   pattern="[0-9]*" required="" >
                   
                  </div>
                </div>
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                    <input type="file"  id="image" placeholder="select image" name="image" >
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
          </div> 
          <!-- /.box -->
          </section>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('../footer.php');?>