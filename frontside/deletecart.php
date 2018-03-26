
<?php
// connect to the database
include('../config.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['cart_id']) && is_numeric($_GET['cart_id'])) {
    // get id value
    $cart_id = $_GET['cart_id'];
    // delete query
    $res = "DELETE FROM cart WHERE cart_id=$cart_id" or die(mysqli_error());
    if (mysqli_query($conn, $res)) {
        echo "Records deleted successfully.......";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // redirect back to the view page
    header("Location: cart.php");
} else {
    header("Location: cart.php");
}
?>



