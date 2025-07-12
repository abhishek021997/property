<?php
// Default SQL query to fetch all rooms
 
include 'connection.php'; // Include your database connection file


if (isset($_POST['submitstud'])) {
    // Process the form data
    //$type_sel = $_POST['roomtypefile'];
    //$type_gen = $_POST['typesfile'];
   
    $names = $_POST['names'];
    $mobile = $_POST['contact'];
    $type_sel = $_POST['roomtype'];
    $type_gen = $_POST['roomfor'];

    $sql_student = "INSERT INTO student (names, mobile, roomtype, gender)VALUES   ('$names','$mobile', '$type_sel', '$type_gen')";
    if (mysqli_query($conn, $sql_student)) {
        echo "<script>alert('Welcome $names')</script>";
    }
    else {
        #echo "Error: " . $sql_student . ":-" . mysqli_error($conn);
        echo "error";

    }
    

  } else {
    // Default selection if the form is not submitted
    $type_sel = 'all';
    $type_gen = 'all';
  }

  
  if ($type_sel == 'single') {
      
      if ($type_gen == 'boys'){
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'single' AND roomtype = 'boys'";
      } else {
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'single' AND roomtype = 'girls'";
      }
  
  } elseif ($type_sel == '1RK') {
      
      if ($type_gen == 'boys'){
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '1RK' AND roomtype = 'boys'";
      } else {
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '1RK' AND roomtype = 'girls'";
      }
  }elseif ($type_sel == 'shared') {
      
      if ($type_gen == 'boys'){
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'shared' AND roomtype = 'boys'";
      } else {
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = 'shared' AND roomtype = 'girls'";
      }
  } elseif ($type_sel == '1BHK') {
      
      if ($type_gen == 'boys'){
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '1BHK' AND roomtype = 'boys'";
      } else {
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '1BHK' AND roomtype = 'girls'";
      }
  } elseif ($type_sel == '2BHK') {
      
      if ($type_gen == 'boys'){
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '2BHK' AND roomtype = 'boys'";
      } else {
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '2BHK' AND roomtype = 'girls'";
      }
  } elseif ($type_sel == '3BHK') {
      
      if ($type_gen == 'boys'){
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '3BHK' AND roomtype = 'boys'";
      } else {
          $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail WHERE types = '3BHK' AND roomtype = 'girls'";
      }
  }
  else {
      $sql_stud_filt = "SELECT  id, images, videos, price, types, roomtype, descriptions  FROM propertydetail";
  }
?>