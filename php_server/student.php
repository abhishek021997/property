<?php
include 'connection.php';

$conn = new mysqli($host, $user, $pass,$dbn);
if(isset($_POST['submit']))
{
  $name = $_POST['studentName'];
  $mobile = $_POST['studentContact'];
  $roomtype = $_POST['Roomtype'];
  $roomfor = $_POST['Roomfor'];
  


  $sql_student = "INSERT INTO users (name,mobile,roomtype,gender)VALUES    ('$name','$mobile', '$roomtype', '$roomfor')";
if (mysqli_query($conn, $sql_student)) {
    echo "<script>alert('Welcome $name press ok and see available rooms  \n Thanks & regards \n Suraj Team')</script>";
}
else {
    #echo "Error: " . $sql_student . ":-" . mysqli_error($conn);
    echo "<script>alert('Hi $name please try again unable to submit your requiest \n Thanks & regards \n Suraj Team')</script>";

}
mysqli_close($conn);
}
?>