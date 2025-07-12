<?php
$host = 'db';
$dbn = 'propertydb';
$user = 'suraj';
$pass = 'PASS';

$conn = new mysqli($host, $user, $pass);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   // Create database if it doesn't exist
   $sql = "CREATE DATABASE IF NOT EXISTS $dbn";
   if ($conn->query($sql) === TRUE) {
       // Database created successfully
       $conn->select_db($dbn);
   } else {
       die("Error creating database: " . $conn->error);
   }
}

?>


