<?php
 
//echo "hi";die;
//echo "<pre>";print_r($_POST);die;   
//database connection
include ('../config.php');

if (isset($_POST['submit'])) {
 //upload image
    $upload_dir = 'picture';
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
//    $subcategory_id = $_POST['subcategory_id'];
    $sql = "INSERT into product(`product_name`,`subcategory_id`,`category_id`,`price`,`quantity`,`weight`,`carat`,`status`,`image`,`product_description`) VALUES ('" . $_POST['productname'] . "','" . $_POST['subcategory_id'] . "','".$_POST['category_id']."','" . $_POST['price'] . "','" . $_POST['quantity'] . "','" . $_POST['weight'] . "','" . $_POST['carat'] . "','" . $_POST['status'] . "','$image','" . $_POST['product_description'] . "')";        
//    echo "<pre>";print_r($sql);die();
    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.......";
        header('Location: productlist.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  //redirect userdetail form
    //header("Location:loginform.php");
} else {

    //redirect userdetail form
    header("Location:addproduct.php");
}
$conn->close();

?>
