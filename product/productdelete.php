
//include('../user/login.php'); // Includes Login Script
//session_start();
//if(!isset($_SESSION['username'])){
//header("location: ../user/loginform.php");
//}


<?php
// connect to the database
include('../config.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
    // get id value
    $product_id = $_GET['product_id'];
    // delete query
    $res = "DELETE FROM product WHERE product_id=$product_id" or die(mysqli_error());
    if (mysqli_query($conn, $res)) {
        echo "Records deleted successfully.......";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // redirect back to the view page
    header("Location: productlist.php");
} else {
    header("Location: productlist.php");
}
?>



