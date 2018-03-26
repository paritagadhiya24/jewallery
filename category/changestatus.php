<?php
//database connection
include ('../config.php');
session_start();
if(!isset($_SESSION['username'])){
header("location: ../user/loginform.php");
}
   
    $category_id = $_GET['category_id'];
    $status = $_GET['status'];
    
    if($category_id != '') {
        
        if($status == 'enable') {
            //echo 'Disable Query';
            $que = "update category set status='disable' where category_id='".$category_id."' ";
            $result = $conn->query($que);
            header("Location: categorylist.php");
        } else {
            //echo 'Enable Query';
            $que = "UPDATE category SET status='enable' WHERE category_id='".$category_id."' ";
            $result = $conn->query($que);
            header("Location: categorylist.php");
        }
    
    }
?>
