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
   echo "Connected to MySQL server successfully!";
}

?>


