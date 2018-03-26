<?php include('./header.php'); ?>

<form action="" method="post" class="form-horizontal" enctype="multipart/form-data" novalidate>
    <?php
    //database connection
    include('../config.php');
    $customer_id = isset($_SESSION['data']['customer_id']) ? $_SESSION['data']['customer_id'] : '';
    $data = "SELECT * FROM customer WHERE customer_id IN ($customer_id) ";
    $result = $conn->query($data);
    while ($row = mysqli_fetch_array($result)) {
        echo"<tr >		
                
                       
                        
                         <input type='radio'  name='user_name' value='save' class='kk' checked style='margin-left: 25px;'>save<br>
                        <div id='saved' style='margin-left: 65px;'><br> 
                        <tr><th><b>username</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[user_name]</td></tr></br>
                        
                        <tr><th><b>Address</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[address]</td></tr></br>
                          
                          
                          <tr><th><b>phonenumber</b></th>&nbsp;:&nbsp;&nbsp;&nbsp;<td>$row[phone_number]</td></tr></br><br>
                          </div>
                        
                        </tr>";
    }


    $conn->close();
    ?>




    <div class="content-wrapper">


        <div class="box-body">
            <div class="form-group">
                <!--<label for="radio" class="col-sm-2 control-label"></label>-->

                <div class="col-sm-4" style="margin-left: 25px;">
                    <!--<div id="manual" style="display:none;">manual</div>-->
                    <input type="radio" name="user_name" value="manual" class="kk"> manual<br>


                </div>
            </div> 
            <div id="yy" style="display: none; margin-left:65px;">
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
                    <label for="address" class="col-sm-2 control-label">Address:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"   pattern="[a-zA-Z0-9]*" required="" >

                    </div>
                </div>
                <div class="form-group">
                    <label for="phone_number" class="col-sm-2 control-label">Phone No:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone_number" placeholder="Enter phone_number" name="phone_number"   pattern="[0-9]*" required="" >

                    </div>
                </div>
            </div>
            <input type="radio" name="" value="" class="" checked> cash on delivery<br>
            <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary pull-left">submit</button>

 <!--<input type="submit" name="cancel" value="cancel"> do not require anything-->

            </div>
            </form>
        </div>
    </div>
    <?php
//database connection
    include '../config.php';
    if (isset($_POST['submit'])) {
        $check = $_POST["user_name"];
        $user_name = $_POST["user_name"];
        if ($check == "manual") {
            $check = $_POST["phone_number"];
            $check = $_POST["address"];
            $sql = "INSERT INTO `orderaddress` (`orderadd_id`, `order_id`, `addresstype`, `address`, `phone_number`, `created_date`, `updated_date`) VALUES ('null', '1', 'manual','" . $_POST["address"] . "', '" . $_POST["phone_number"] . "', 'CURRENT_TIMESTAMP(6).000000', '0000-00-00 00:00:00.000000')";
            if ($result = $conn->query($sql)) {
                echo "Records added successfully.......";
            } else {


//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

//    echo json_encode($array);
//    print_r($array);die;
//         echo "<pre>";print_r($result);die;
//      $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';   
//      $quantity = $row['quantity'];
            //delete cart record
        } else {
            $customer_id = isset($_SESSION['data']['customer_id']) ? $_SESSION['data']['customer_id'] : '';
            $sql2 = "SELECT * FROM `customer` where customer_id=$customer_id";
            $result = mysqli_query($conn, $sql2);
            while ($row = $result->fetch_assoc()) {
                $address = $row['address'];
                $phone_number = $row['phone_number'];
            }
            $sql1 = "INSERT INTO `orderaddress` (`orderadd_id`, `order_id`, `address_type`, `address`, `phone_number`, `created_date`, `updated_date`) VALUES ('null', '1', 'save','" . $address . "', '" . $phone_number . "', 'CURRENT_TIMESTAMP(6).000000', '0000-00-00 00:00:00.000000')";
            if (mysqli_query($conn, $sql1)) {
                echo "Records added successfully.......";
            } else {
                echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
            }
        }

        $customer_id = isset($_SESSION['data']['customer_id']) ? $_SESSION['data']['customer_id'] : '';
//        echo "nimesh";
//        die;
        $sql3 = "SELECT * FROM `cart` join product on cart.product_id = product.product_id WHERE customer_id=$customer_id";
        $array = $conn->query($sql3);
//        echo "<pre>";
//        print_r($array);
//        die;
//        $array = mysqli_fetch_array($sql3);
        while ($row = $array->fetch_assoc()) {
//            print_r($row);;
//            die;
            $quantity = $row['quantity'];
            $product_id = $row['product_id'];
            $price = $row['price'];
            $netprice = $price*$quantity;
            //insert order
            $sqlorder = "INSERT into `order` (`customer_id`,`product_id`,`quantity`,`servicetax`,`netprice`) VALUES ('" . $customer_id . "','" . $product_id . "','" . $quantity . "','0','" . $netprice . "')";
            if ($result = $conn->query($sqlorder)) {

//            if (mysqli_query($conn, $sql)) {
                //echo "Records added successfully.";
            } else {
                echo "ERROR: Could not able to execute $sqlorder. " . mysqli_error($conn);
            }
            echo '<script>window.location = "account.php";</script>';
        }
       $delete = "delete from cart where customer_id=$customer_id";
       $result = $conn->query($delete);
    }

     
    ?>



    <script>
        $('input[name=user_name]').on('change', function () {
            //   alert( this.value ); // or $(this).val()
            if (this.value == "save") {
                $('#saved').show();
                $('#yy').hide();
            } else {
                $('#saved').hide();
                $('#yy').show();
            }
        });
    </script>

<?php include('./footer.php'); ?>