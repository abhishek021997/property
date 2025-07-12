<?php
include 'php_server/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'pages/meta.php';  ?>
    <title>JSR PROPERTY</title>
    <style>
       
        .sidenav .form-container {
            margin-left: 35%;
        }

        .sidenav .form-container h2 {
            text-align: center;
        }

        .sidenav .form-container input[type="text"],
        .sidenav .form-container input[type="email"],
        .sidenav .form-container select {
            width: 90%;
            padding: 10px;
            margin: 10px auto;
            display: block;
        }

        .sidenav .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px auto;
            display: block;
        }
    </style>
</head>

<body>
    <?php include 'pages/header.php';  ?>
    <div class="container">
        <h2>Available Properties</h2>
        <div class="property">
                <div class="property-card" onclick="location.href = 'pages/owner/owner.php';">
                    <img src="images/img.jpg" alt="Property 1">
                    <div class="details">
                        <h3>Owner</h3>
                        <p>If you are a owner click here</p>
                    </div>
                </div>
            
                <div class="property-card" onclick="openSelection()">
                    <img src="images/img2.jpg" alt="Property 2">
                    <div class="details">
                        <h3>Student</h3>
                        <p>If you need PG/Room/Flats Click here</p>
                    </div>
                </div>

                <div class="property-card" onclick="opencommer()">
                    <img src="images/img1.jpg" alt="Property 3">
                    <div class="details">
                        <h3>Commercial Properties & Perchase</h3>
                        <p>If you need Shop click here</p>
                    </div>
                </div>
        </div>
    </div>
    
    <button class="open-button" onclick="openForm()"><i class="fas fa-comment-dots"></i></button>
    <div class="form-popup" id="myForm">
        <form action="php_server/contact_form.php" method="POST" class="form-container">
            <h2>Contact Form</h2>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="name" required>

            <label for="phone"><b>Contact number</b></label>
            <input type="mobile" placeholder="Enter Phone number" name="phone" required>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>

    </div>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSelection()">&times;</a>
        <form action="pages/student/student.php" method="POST" class="form-container">
            <h2>Student Selection</h2>
            <label for="studentName"><b>Student Name</b></label>
            <input type="text" placeholder="Enter student name" name="names" required>

            <label for="studentContact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter student contact number" name="contact" required>

            <label for="Roomtype"><b>Room Type</b></label>
            <select id="Roomtype" name="roomtype" required>
                <option value="single">Single Room</option>
                <option value="1RK">1 RK</option>
                <option value="shared">Shared Room</option>
                <option value="1BHK">1 BHK</option>
                <option value="2BHK">2 BHK</option>
                <option value="3BHK">3 BHK</option>
            </select>
            <select id="Roomfor" name="roomfor" required>
                <option value="boys">Boys Room</option>
                <option value="girls">Girls Room</option>
            </select>


            <input type="submit" class="btn btn-primary" name="submitstud" value="Upload">
        </form>
            
    </div>

    <div id="mySidenavcommer" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closecommer()">&times;</a>
        <form action="pages/commercial/commer.php" method="POST"  class="form-container">
            <h2>Commercial Selection</h2>
            <label for="customerName"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="customerName" required>


            <label for="customerContact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter contact number" name="customerContact" required>

            <label for="customerBudget"><b>Your budget</b></label>
            <input type="text" placeholder="Please provide your budget" name="customerBudget" required>

            <label for="customerPurpose"><b>Purpose</b></label>
            <input type="text" placeholder="Enter your Purpose for buying " name="customerPurpose" required>

            <label for="customerlocation"><b>Preferd localtion</b></label>
            <input type="text" placeholder="Please provide your Preferd localtion" name="customerlocation" required>

          
            <select id="Roomfor" name="rentfor" required>
                <option value="stall">Stall</option>
                <option value="shop">Shop</option>
				<option value="library">Library</option>
            </select>


            <input type="submit" class="btn btn-primary" name="submitcomm" value="Upload">
        </form>
    </div>

    <?php include 'pages/footer.php';  ?>


<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

    function openSelection() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeSelection() {
        document.getElementById("mySidenav").style.width = "0";
    }


    function opencommer() {
        document.getElementById("mySidenavcommer").style.width = "100%";
    }

    function closecommer() {
        document.getElementById("mySidenavcommer").style.width = "0";
    }


    
</script>
</body>
</html>