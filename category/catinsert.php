<?php
//database connection
session_start();
//echo "<pre>";print_r($_POST);die;
include('../config.php');
	if(isset($_POST['submit'])){
   //upload image
            $upload_dir = 'picture';
//            echo "<pre>";print_r($_FILES);die;
            $tmp_name = $_FILES["image"]["tmp_name"];
            $name = basename($_FILES["image"]["name"]);
                if($name == '')
                {
                    $image = "";
                }
             else {
                $image = $upload_dir . "/" . $name;    
                }
            move_uploaded_file($tmp_name, $image);
              
 //insert record from user table
    $sql = "INSERT into category(`category_name`,`status`,`image`) VALUES ('" . $_POST['category_name'] . "','".$_POST['status']."','$image')";
    if (mysqli_query($conn,$sql)) {       
        echo "Records added successfully.......";
        header('Location: categorylist.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  //redirect userdetail form
    //header("Location:loginform.php");
}
$conn->close();
?>   