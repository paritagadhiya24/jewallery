
//include('../user/login.php'); // Includes Login Script
//session_start();
//if(!isset($_SESSION['username'])){
//header("location: ../user/loginform.php");
//}


<?php
// connect to the database
include('../config.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['category_id']) && is_numeric($_GET['category_id'])) {
    // get id value
    $category_id = $_GET['category_id'];
    // delete query
    $res = "DELETE FROM category WHERE category_id=$category_id" or die(mysqli_error());
    if (mysqli_query($conn, $res)) {
        echo "Records deleted successfully.......";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // redirect back to the view page
    header("Location: categorylist.php");
} else {
    header("Location: categorylist.php");
}
?>



