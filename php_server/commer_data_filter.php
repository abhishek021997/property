<?php
// Default SQL query to fetch all rooms
include 'connection.php'; // Include your database connection file

if(isset($_POST['submitcomm']))
{
  $names = $_POST['customerName'];
  $mobile = $_POST['customerContact'];
  $budget = $_POST['customerBudget'];
  $purpose = $_POST['customerPurpose'];
  $locations = $_POST['customerlocation'];
  $type_sel = $_POST['rentfor'];
  

  $sql_commer = "INSERT INTO commer (names,mobile,budget,purpose,locations,rentfor)VALUES    ('$names','$mobile', '$budget', '$purpose', '$locations', '$type_sel')";
  if (mysqli_query($conn, $sql_commer)) {
    echo "<script>alert('Welcome $names')</script>";
}
else {
    #echo "Error: " . $sql_commer . ":-" . mysqli_error($conn);
    echo "error";

}

} else {
  // Default selection if the form is not submitted
  $type_sel = 'all';
}
 

if ($type_sel == 'stall') {

    $sql_comm_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'stall'";

} elseif ($type_sel == 'shop') {
    
    $sql_comm_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'shop'";
    
} elseif ($type_sel == 'library') {
    
    $sql_comm_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'library'";

}
else {
    $sql_comm_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail";
}

?>