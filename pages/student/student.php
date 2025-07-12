<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php';  ?>
    <title>Student Property Listings</title>

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

        
        .full-screen-pop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .pop-up {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pop-up h2 {
            margin: 0 0 10px;
            font-size: 1.5em;
        }
        .pop-up p {
            margin: 0 0 20px;
            color: #555;
        }
        .pop-up button, .pop-up a {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .pop-up button:hover, .pop-up a:hover  {
            background-color: #0056b3;
        }

        .pop-up select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
         
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }


    </style>
</head>
<body>

    
    <?php include 'header.php';  ?>
    
    <div class="container">
        <?php
   
        // Database connection
        include '../../php_server/studen_data_filter.php';  
        $result = $conn->query($sql_stud_filt);

        if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="../../uploads/'.$row["images"].'" alt="ROOM_Image">';
            echo '<p>View: <button onclick="video_frame'.$row["id"].'()" target="video_link">See Room Video</button></p>';
            echo '<p>Price: ₹' . $row["price"] . '</p>';
            echo '<p>Type: ' . $row["roomtype"] . '</p>';
            echo '<p class="contact_info_card_btn">';
            echo '<a onclick="openForm()"><i class="fas fa-info"></i> More Details</a>';
            echo '</p>';
            echo '<a href=""><p class="whatapp"><i class="fas fa-comment"></i> Whatsapp</p></a>';

            echo '<!-- More infomation Form Popup -->';
            echo '<div class="form-popup" id="myForm'.$row["id"].'">';
            echo '<div class="details-container">';
            echo '<p>';
            echo '' . $row["descriptions"] . '';
            
            echo '</p>';
            echo '<button type="button" class="btn cancel" onclick="closeForm()">Close</button>';
            echo '</div>';
            echo '</div>';
            echo '<!-- Video Frame -->';
            echo '<div id="mySidenav'.$row["id"].'" class="sidenav">';
            echo '<a href="javascript:void(0)" class="closebtn" onclick="close_video_frame'.$row["id"].'()">&times;</a>';
            echo '<div class="Video-frame">';
            echo '<iframe id="videoFrame'.$row["id"].'" width="560" height="315" src="" frameborder="0" allowfullscreen name="video_link"></iframe>';
            echo '</div>';
            echo '</div>';
            echo '<script>';
            echo 'function video_frame'.$row["id"].'() {';
            echo 'var videoFrame = document.getElementById("videoFrame'.$row["id"].'");';
            echo 'videoFrame.src = "../../uploads/'.$row["videos"].'";';
            echo 'document.getElementById("mySidenav'.$row["id"].'").style.width = "100%";';
            echo '}';
            echo 'function close_video_frame'.$row["id"].'() {';
            echo 'document.getElementById("mySidenav'.$row["id"].'").style.width = "0";';
            echo 'var videoFrame = document.getElementById("videoFrame'.$row["id"].'");';
            echo 'videoFrame.src = "";';
            echo '}';
            echo 'function openForm() {';
            echo 'document.getElementById("myForm'.$row["id"].'").style.display = "block";';
            echo '}';
            echo 'function closeForm() {';
            echo 'document.getElementById("myForm'.$row["id"].'").style.display = "none";';
            echo '}';
            echo '</script>';
            echo '</div>'; // End of card
            echo '<br>'; // Add a line break between cards


        }
        } else {
            echo '<div class="full-screen-pop">';
            echo '<div class="pop-up">';
            echo '<h2>Welcome to'. $names .'</h2>';
            echo '<p>There is 0 Result as per your filter</p>';
            echo '<a href="../../index.php">Close</a>';
            echo '</div>';
            echo '<div class="overlay"></div>';
            echo '';
            echo '</div>';
            
        }
        $conn->close();
        
        ?>


    </div> <!-- End of container -->


    <?php include 'pages/footer.php';  ?>

</body>
</html>