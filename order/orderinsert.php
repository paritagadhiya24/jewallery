<?php
//database connection
session_start();
//echo "<pre>";print_r($_POST);die;
include('../config.php');
	if(isset($_POST['submit'])){
              
 //insert record from user table
    $sql = "INSERT into `order` (`customer_id`,`product_id`,`quantity`,`servicetax`,`netprice`) VALUES ('" . $_POST['customer_id'] . "','" . $_POST['product_id'] . "','".$_POST['quantity']."','" . $_POST['servicetax'] . "','" . $_POST['netprice'] . "')";
    if (mysqli_query($conn,$sql)) {      
//        echo "<pre>";print_r($sql);die;
        echo "Records added successfully.......";
        header('Location: orderlist.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  //redirect userdetail form
    //header("Location:loginform.php");
}
$conn->close();
?>   