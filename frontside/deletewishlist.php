
<?php
// connect to the database
include('../config.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['wishlist_id']) && is_numeric($_GET['wishlist_id'])) {
    // get id value
    $wishlist_id = $_GET['wishlist_id'];
    // delete query
    $res = "DELETE FROM wishlist WHERE wishlist_id=$wishlist_id" or die(mysqli_error());
    if (mysqli_query($conn, $res)) {
        echo "Records deleted successfully.......";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // redirect back to the view page
    header("Location: wishlist.php");
} else {
    header("Location: wishlist.php");
}
?>



