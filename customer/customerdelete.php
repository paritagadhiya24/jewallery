<?php
// connect to the database
include('../config.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['customer_id']) && is_numeric($_GET['customer_id'])) {
    // get id value
    $customer_id = $_GET['customer_id'];
    // delete query
    $res = "DELETE FROM customer WHERE customer_id=$customer_id" or die(mysqli_error());
    if (mysqli_query($conn, $res)) {
        echo "Records deleted successfully.......";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // redirect back to the view page
    header("Location: customerlist.php");
} else {
    header("Location: customerlist.php");
}
?>




