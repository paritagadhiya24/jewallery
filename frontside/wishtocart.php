<?php include('./header.php'); ?>
 <?php

 error_reporting(0);
// echo"sdfsdfds";
    //database connection
    include('../config.php');
    $customer_id = isset($_SESSION['data']['customer_id']) ? $_SESSION['data']['customer_id'] : '';
    $wishlist_id = isset($_REQUEST['wishlist_id'])?$_REQUEST['wishlist_id']:'';                             
    $data = "SELECT * FROM wishlist WHERE wishlist_id =$wishlist_id";
   // $result = $conn->query($data);  
    ///if($result->num_rows > 0)
          $result = $conn->query($data); 
          $num_rows = $result->num_rows;
          if($result->num_rows > 0)
             //  echo "<pre>";print_r( $result);die();
        //echo "<pre>";print_r($result);die();

    {
               while ($row = mysqli_fetch_array($result)) {
//              echo "<pre>";print_r($result);die();
               // while ($num_rows = $result->fetch_assoc()) {
             // echo "<pre>";print_r($row);die();
           // $product_id = isset($_REQUEST['pro_id'])?$_REQUEST['pro_id']:'';
                                 
                // $sql = "INSERT INTO `cart` (`customer_id`,`product_id`,`quantity`) VALUES ('" .$customer_id ."','".$product_id."', '1')";       
 $result = $conn->query($sql);
 //echo "<pre>";print_r($result);die();
$pro_id = $row['product_id'];                  
// $pro_id = $_POST['product_id'];
    $quantity = 1;
 $sql1 = "SELECT * FROM `cart` where customer_id=$customer_id && product_id=$pro_id";
   $result1 =  mysqli_query($conn, $sql1);
   //echo "<pre>";print_r($ $result1);die();
   //exit;
    $count = mysqli_num_rows($result1);
if ($count > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            $quantity = $row['quantity'] + $quantity;
             //echo"<pre>";print_r($row);die();
            $cart_id = $row['cart_id'];
          
            $sql1 = "update `cart` set quantity=$quantity where cart_id=$cart_id";
             //echo"<pre>";print_r($sql);die();
            if (mysqli_query($conn, $sql1)) {
                
            } else {
                
            }
        }
        
    } else {
        $sql = "INSERT INTO `cart` (`cart_id`, `customer_id`, `product_id`, `quantity`) VALUES ( NULL ,'" . $customer_id . "','" . $pro_id. "', '" . $quantity . "')";
        //echo"<pre>";print_r($sql);die();
        if (mysqli_query($conn, $sql)) {
            
        } else {
            
        }
    }
            $delete = "delete from wishlist where wishlist_id=$wishlist_id";
            $result = $conn->query($delete);              
         }
    }
echo '<script>window.location = "cart.php";</script>';
    $conn->close();
    
    ?>


