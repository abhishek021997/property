<?php
require_once '../../index.php';
include '../../php_server/student.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .container {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background-color: #f4f4f4;
        }
        .container .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 15px;
            width: 300px;
            overflow: hidden;
            text-align: center;
        }
        .container .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .container .card h3 {
            margin: 15px 0 5px;
            font-size: 1.5em;
        }
        .container .card p {
            margin: 0 15px 15px;
            color: #555;
            float: left;
            text-align: left;
            width: 100%;
        }
        .container .card p button {
            display: inline-block;
            margin: 10px 5px;
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            border: none;
        }
        .container .card p button:hover {
            background-color: #0056b3;
            cursor: pointer;
        }
        .container .card p.contact_info_card_btn a {
            text-decoration: none;
            color: #007bff;
            font-size: 1.2em;
        }

        .container .card p.contact_info_card_btn a:hover {
            color: #0056b3;
        }

    
        .container .card .whatapp{
            text-decoration: none;
            color: #075e54;
            font-size: 1.2em;
            background-color: #dff0d8;
            width: 83%;
            text-align: center;
            padding: 10px;
        }
        .container .card .whatapp a {
            text-decoration: none;
            color: #075e54;
        }
        .container .card .whatapp:hover {
            color: #004d40;
            cursor: pointer;
            background-color: #c8e6c9;
        }


    </style>
</head>
<body>
    <header>
        <a href="" class="logo"><i>LOGO</i></a>
        <h1>Rent Property</h1>
        <nav>
            <a href="../../index.html"><i class="fas fa-home"></i>Home</a>
            <a onclick="openForm()"><i class="fas fa-phone"></i>Contact Us</a>
            <a href="#"><i class="fas fa-info"></i>About Us</a>
        </nav>
    </header>
    <div class="container">
<?php
   
    // Database connection
    include '../../php_server/student_data_filter.php';
    $result = $conn->query($sql_stud_filt);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo '<div class="card">';
        echo '<img src="../../images/'.$row["images"].'" alt="ROOM_Image">';
        echo '<p>View: <button onclick="video_frame()" target="video_link">See Room Video</button></p>';
        echo '<p>Price: ₹' . $row["price"] . '</p>';
        echo '<p>Type: ' . $row["types"] . '</p>';
        echo '<p class="contact_info_card_btn">';
        echo '<a onclick="openForm()"><i class="fas fa-info"></i> More Details</a>';
        echo '</p>';
        echo '<a href=""><p class="whatapp"><i class="fas fa-comment"></i> Whatsapp</p></a>';

        echo '<!-- More infomation Form Popup -->';
        echo '<div class="form-popup" id="myForm">';
        echo '<div class="details-container">';
        echo '<p>';
        echo '' . $row["details"] . '';
        
        echo '</p>';
        echo '<button type="button" class="btn cancel" onclick="closeForm()">Close</button>';
        echo '</div>';
        echo '</div>';
        echo '<!-- Video Frame -->';
        echo '<div id="mySidenav" class="sidenav">';
        echo '<a href="javascript:void(0)" class="closebtn" onclick="close_video_frame()">&times;</a>';
        echo '<div class="Video-frame">';
        echo '<iframe id="videoFrame" width="560" height="315" src="" frameborder="0" allowfullscreen name="video_link"></iframe>';
        echo '</div>';
        echo '</div>';
        echo '<script>';
        echo 'function video_frame() {';
        echo 'var videoFrame = document.getElementById("videoFrame");';
        echo 'videoFrame.src = "../../images/videos/'.$row["videos"].'";';
        echo 'document.getElementById("mySidenav").style.width = "100%";';
        echo '}';
        echo 'function close_video_frame() {';
        echo 'document.getElementById("mySidenav").style.width = "0";';
        echo 'var videoFrame = document.getElementById("videoFrame");';
        echo 'videoFrame.src = "";';
        echo '}';
        echo 'function openForm() {';
        echo 'document.getElementById("myForm'.$row["id"].'").style.display = "block";';
        echo '}';
        echo 'function closeForm() {';
        echo 'document.getElementById("myForm").style.display = "none";';
        echo '}';
        echo '</script>';
        echo '</div>'; // End of card
        echo '<br>'; // Add a line break between cards


    }
    } else {
        echo "0 results";
        require_once '../../index.php';
    }
    $conn->close();
    ?>

    </div> <!-- End of container -->


    <div id="contact_slid">
        <a href="https://wa.me/+91-8527763950?text=Hi,connect-me" id="projects">Whatapp<i class="fas fa-comment"></i></a>
        <a href="tel:+91-8527763950" id="contact">Call Us  <i class="fas fa-phone"></i></a>
        
    </div>
    

    <footer>
        <div class="container">
            <p>&copy; 2025 Suraj's Property Website. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>