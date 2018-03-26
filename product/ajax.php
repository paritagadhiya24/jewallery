<?php

//Include the database configuration file
include('../config.php');
//print_r($_REQUEST["category_id"]);die;
if (!empty($_REQUEST['category_id'])) {
    //Fetch all state data
     $result = "SELECT * FROM subcategory WHERE category_id = " . $_REQUEST['category_id'] . " AND status = 'enable'";
    //Count total number of rows
    $result2 = $conn->query($result);
//     print_r($result);die;
//    $rowCount = 1;
    //Count total number of rows
    $rowCount = $result2->num_rows;

    //subcategory option list
    if ($rowCount > 0) {
        
        $subcat =  '<select class="form-control"  name="subcategory_id" required=""><option value="">Select subcategory</option>';
     
        while ($row = mysqli_fetch_array($result2)) {
//               echo '<pre>'; print_r($result1);die();  

            $subcat .=  '<option value="' . $row['subcategory_id'] . '">' . $row['subcategory_name'] . '</option>';
        }
    } else {
        $subcat .=  '<option value="">Subcategory not available</option></select>';
    }
}
echo $subcat;die;
?>

