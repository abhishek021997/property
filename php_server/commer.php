<?php
include 'connection.php';

$conn = new mysqli($host, $user, $pass,$dbn);
if(isset($_POST['submit']))
{
  $name = $_POST['customerName'];
  $mobile = $_POST['customerContact'];
  $budget = $_POST['customerBudget'];
  $purpose = $_POST['customerPurpose'];
  $locations = $_POST['customerlocation'];
  $roomfor = $_POST['rentfor'];
  


  $sql_commer = "INSERT INTO users (name,mobile,budget,purpose,locations,rentfor)VALUES    ('$name','$mobile', '$budget', '$purpose', '$locations', '$roomfor')";
if (mysqli_query($conn, $sql_commer)) {
    echo "<script>alert('Welcome $name press ok and see available Places  \n Thanks & regards \n Suraj Team')</script>";
}
else {
    #echo "Error: " . $sql_commer . ":-" . mysqli_error($conn);
    echo "<script>alert('Hi $name please try again unable to submit your requiest \n Thanks & regards \n Suraj Team')</script>";

}
mysqli_close($conn);
}
?>