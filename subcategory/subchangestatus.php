<?php
//database connection
include ('../config.php');
session_start();
if(!isset($_SESSION['username'])){
header("location: ../user/loginform.php");
}
   
    $subcategory_id = $_GET['subcategory_id'];
    $status = $_GET['status'];
    
    if($subcategory_id != '') {
        
        if($status == 'enable') {
            //echo 'Disable Query';
            $que = "update subcategory set status='disable' where subcategory_id='".$subcategory_id."' ";
            $result = $conn->query($que);
            header("Location: subcategorylist.php");
        } else {
            //echo 'Enable Query';
            $que = "UPDATE subcategory SET status='enable' WHERE subcategory_id='".$subcategory_id."' ";
            $result = $conn->query($que);
            header("Location: subcategorylist.php");
        }
    
    }
?>
