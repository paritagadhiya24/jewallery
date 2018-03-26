<?php
//database connection
session_start();
//echo "<pre>";print_r($_POST);die;
include('../config.php');
	if(isset($_POST['submit'])){
     //  echo "hi";die;
     //echo "<pre>";print_r($submit);die;          
 //insert record from user table
    $sql = "INSERT into subcategory(`category_id`,`subcategory_name`,`status`) VALUES ('" . $_POST['category_id'] . "','" . $_POST['subcategory_name'] . "','".$_POST['status']."')";
     //echo "<pre>";print_r($sql);die;
    if (mysqli_query($conn,$sql)) {       
       echo "Records added successfully.......";
        header('Location: subcategorylist.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  //redirect userdetail form
    //header("Location:loginform.php");
}
$conn->close();
?>   