<?php
include 'connection.php';

$conn = new mysqli($host, $user, $pass,$dbn);
if(isset($_POST['submit']))
{
    $propertyType = $_POST['propertyType'];
    $types = $_POST['types'];
    $propertyLocation = $_POST['propertyLocation'];
    $propertyPrice = $_POST['propertyPrice'];
    $Roomtype = $_POST['Roomtype'];
    $propertyDescription = $_POST['propertyDescription'];
    $ownerName = $_POST['ownerName'];
    $ownerContact = $_POST['ownerContact'];
    $ownerEmail = $_POST['ownerEmail'];
    // Handle file uploads
    
    $images = $_FILES['images']['name'];
    $videos = $_FILES['file']['name'];

    // Check if files are uploaded
    if (empty($images) || empty($videos)) {
        echo "Please upload both images and videos!";
        exit;
    }
    // Check if the uploaded files are valid
    $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $allowedVideoTypes = ['video/mp4', 'video/avi', 'video/mpeg'];
    $imageType = $_FILES['images']['type'];
    $videoType = $_FILES['file']['type'];
    if (!in_array($imageType, $allowedImageTypes)) {
        echo "Invalid image format! Only JPEG, PNG, and GIF are allowed.";
        exit;
    }
    if (!in_array($videoType, $allowedVideoTypes)) {
        echo "Invalid video format! Only MP4, AVI, and MPEG are allowed.";
        exit;
    }
    // Check if the file size is within limits (e.g., 5MB for images and 20MB for videos)
    $maxImageSize = 5 * 1024 * 1024; // 5MB
    $maxVideoSize = 20 * 1024 * 1024; // 20MB
    if ($_FILES['images']['size'] > $maxImageSize) {
        echo "Image size exceeds the limit of 5MB!";
        exit;
    }
    if ($_FILES['file']['size'] > $maxVideoSize) {
        echo "Video size exceeds the limit of 20MB!";
        exit;
    }

    // Create the uploads directory if it doesn't exist
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }
    // Check if the uploads directory is writable
    if (!is_writable('uploads')) {
        echo "Uploads directory is not writable!";
        exit;
    }

    //Undefined array key "videos" 
    if (!isset($_FILES['file']) || $_FILES['file']['error'] != UPLOAD_ERR_OK) {
        echo "No video file uploaded!";
        exit;
    }

    // Move uploaded files to a specific directory
    $targetDir = "uploads/";
    $imageTargetPath = $targetDir . basename($_FILES['images']['name']);
    $videoTargetPath = $targetDir . basename($_FILES['file']['name']);
    if (!move_uploaded_file($_FILES['images']['tmp_name'], $imageTargetPath)) {
        echo "Error uploading image file!";
        exit;
    }
    if (!move_uploaded_file($_FILES['file']['tmp_name'], $videoTargetPath)) {
        echo "Error uploading video file!";
        exit;
    }

    // Validate inputs
    if (empty($propertyType) || empty($types) || empty($propertyLocation) || empty($propertyPrice) || empty($Roomtype) || empty($propertyDescription) || empty($ownerName) || empty($ownerContact) || empty($ownerEmail)) {
        echo "All fields are required!";
        exit;
    }
    if (!filter_var($ownerEmail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }
    if (!preg_match('/^[0-9]{10}$/', $ownerContact)) {
        echo "Invalid contact number! It should be 10 digits.";
        exit;
    }

    // Prepare SQL query
    $sql = "INSERT INTO propertydetail (propertyType, types, locations, price, roomtype, descriptions, ownername, ownercontact, owneremail, images, videos) VALUES ('$propertyType', '$types', '$propertyLocation', '$propertyPrice', '$Roomtype', '$propertyDescription', '$ownerName', '$ownerContact', '$ownerEmail', '$images', '$videos')";
  



if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Welcome $ownerName our team will contect you shortly')</script>";
    echo "<script>window.location.href = '../index.php';</script>";
}
else {
    echo "<script>alert('There is some error to upload your data please contect with +91-8527763950')</script>";
    echo "<script>window.location.href = '../index.php';</script>";
}
mysqli_close($conn);
}
?>