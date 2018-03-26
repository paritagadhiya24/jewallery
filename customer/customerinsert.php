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
     //  echo "hi";die;
     //echo "<pre>";print_r($submit);die;  
//     $date_Of_birth = $_POST['day']."-". $_POST['month']."-".$_POST['year']; 
             
 //insert record from user table
    $sql = "INSERT into customer(`first_name`,`last_name`,`user_name`,`email`,`password`,`gender`,`date_of_birth`,`address`,`city`,`state`,`country`,`pincode`,`phone_number`,`image`) VALUES ('" . $_POST['first_name'] . "','" . $_POST['last_name'] . "','" . $_POST['user_name'] . "','".$_POST['email']."','" . $_POST['password'] . "','" . $_POST['gender'] . "','" . $_POST['date_of_birth'] . "','" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['state'] . "','" . $_POST['country'] . "','" . $_POST['pincode'] . "','" . $_POST['phone_number'] . "','$image')";
    if (mysqli_query($conn,$sql)) {       
        echo "Records added successfully.......";
        header('Location: customerlist.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  //redirect userdetail form
    //header("Location:loginform.php");
}
$conn->close();
?>   