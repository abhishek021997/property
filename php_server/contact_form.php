<?php
include 'connection.php';

$conn = new mysqli($host, $user, $pass,$dbn);
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $mobile = $_POST['phone'];
  $sql_contact = "INSERT INTO users (name,mobile)VALUES    ('$name','$mobile')";
if (mysqli_query($conn, $sql_contact)) {
echo "<script>alert('Welcome $name our team will contect you shortly')</script>";
}
else {
#echo "Error: " . $sql_contact . ":-" . mysqli_error($conn);
echo "<script>alert('Hi $name please try again unable to submit requiest \n Thanks & regards \n Suraj Team')</script>";

}
mysqli_close($conn);
}
?>