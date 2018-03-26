<?php
//database connection
include ('../config.php');
session_start();
if(!isset($_SESSION['username'])){
header("location: ../user/loginform.php");
}
   
    $product_id = $_GET['product_id'];
    $status = $_GET['status'];
    
    if($product_id != '') {
        
        if($status == 'enable') {
            //echo 'Disable Query';
            $que = "update product set status='disable' where product_id='".$product_id."' ";
            $result = $conn->query($que);
            header("Location: productlist.php");
        } else {
            //echo 'Enable Query';
            $que = "UPDATE product SET status='enable' WHERE product_id='".$product_id."' ";
            $result = $conn->query($que);
            header("Location: productlist.php");
        }
    
    }
?>
