<?php
include 'connection.php';

$conn = new mysqli($host, $user, $pass,$dbn);
if(isset($_POST['submitcont']))
{
  $names = $_POST['name'];
  $mobile = $_POST['phone'];
  $sql_contact = "INSERT INTO contect (names,mobile)VALUES    ('$names','$mobile')";
if (mysqli_query($conn, $sql_contact)) {
echo "<script>alert('Welcome $name our team will contect you shortly')</script>";
echo "<script>window.location.href = '../index.php';</script>";
}
else {
#echo "Error: " . $sql_contact . ":-" . mysqli_error($conn);
echo "<script>alert('Hi $name please try again unable to submit requiest \n Thanks & regards \n Suraj Team')</script>";
echo "<script>window.location.href = '../index.php';</script>";

}
mysqli_close($conn);
}
?>