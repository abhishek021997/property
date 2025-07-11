<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<style>
    body{
        background-image: url("../../images/img.jpg");
        background-size: cover;
        background-position: center;
        
    }
    h1 {
        text-align: center;
        margin-top: 20px;
        color: #fff;
    }

    form {
        max-width: 600px;
        margin: auto;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
    }

    form label {
        display: block;
        margin-bottom: 10px;
    }

    form input[type="file"] {
        width: 100%;
    }

    form input[type="text"],
    form input[type="number"],
    form textarea,
    form select,
    form input[type="email"] {
        width: 95%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    form textarea {
        resize: vertical;
    }
    form select {
        width: 98%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    form .file-info {
        margin-top: 5px;
        font-size: 0.9em;
        color: #555;
    }
    form input[type="file"]::file-selector-button {
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    form input[type="file"]::file-selector-button:hover {
        background-color: #0056b3;
    }
    form input[type="file"]::file-selector-button:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    form input[type="file"]::file-selector-button:active {
        background-color: #004085;
    }
    form input[type="file"]::file-selector-button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    

    form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    form button:hover {
        background-color: #218838;
    }


</style>

<body>
    <header>
        <a href="" class="logo"><i>LOGO</i></a>
        <h1>Welcome to Property buying</h1>
        <nav>
            <a href="../../index.html"><i class="fas fa-home"></i>Home</a>
            <a onclick="openForm()"><i class="fas fa-phone"></i>Contact Us</a>
            <a href="#"><i class="fas fa-info"></i>About Us</a>
        </nav>
    </header>
    <h1>Provide your Details</h1>
    <form action="php_server/owner.php" method="post" enctype="multipart/form-data">
        <label for="propertyType">Property Type:</label>
        <select id="propertyType" name="propertyType" required>
            <option value="residential">Residential</option>
            <option value="commercial">Commercial</option>
            <option value="other" selected>Other</option>
        </select>

        <script>
            document.getElementById('propertyType').addEventListener('change', function() {
                const selectedValue = this.value;
                const propertyTypeSelect = document.getElementById('propertyType');
                if (selectedValue === 'residential') {
                    propertyTypeSelect.innerHTML = `
                        <option value="single">Single Room</option>
                        <option value="1RK">1 RK</option>
                        <option value="shared">Shared Room</option>
                        <option value="1BHK">1 BHK</option>
                        <option value="2BHK">2 BHK</option>
                        <option value="3BHK">3 BHK</option>
                    `;
                    document.getElementById('girlsboyes_name').style.display = 'block'; // Show room type selection
                    document.getElementById('girlsboyes').style.display = 'block'; // Show room type selection
                    
                } else if (selectedValue === 'commercial') {
                    propertyTypeSelect.innerHTML = `
                        <option value="commercial">Shop</option>
                        <option value="stall">Stall</option>
                        <option value="library">Library</option>
                    `;
                    document.getElementById('girlsboyes_name').style.display = 'none'; // Hide room type selection
                    document.getElementById('girlsboyes').style.display = 'none'; // Hide room type selection

                } else {
                    propertyTypeSelect.innerHTML = `
                        <option value="other">Other</option>
                    `;
                }
            });

        </script>


        <select id="propertyfor" name="types" required>
            <option value="rent">Rent</option>
            <option value="sale">Sale</option>
        </select>

        <br><br>
        <label for="propertyLocation">Property Location:</label>
        <input type="text" id="propertyLocation" name="propertyLocation" placeholder="Enter property location" required>
        <br><br>
        <label for="propertyPrice">Property Price:</label>
        <input type="number" id="propertyPrice" name="propertyPrice" placeholder="Enter property price" required>
        <br><br>
        
        
        <label for="girlsboyes" id="girlsboyes_name" style="display: none;">Please select type of room </label>
        <select id="girlsboyes" name="Roomtype" style="display: none;">
            <option value="girls">Girls</option>
            <option value="boys">Boys</option>
            
        </select>
        <br><br>


        <label for="propertyDescription">Property Description:</label>
        <textarea id="propertyDescription" name="propertyDescription" placeholder="Enter property description" rows="4" required></textarea>
        <br><br>
        <label for="ownerName">Owner Name:</label>
        <input type="text" id="ownerName" name="ownerName" placeholder="Enter owner's name" required>
        <br><br>
        <label for="ownerContact">Owner Contact:</label>
        <input type="text" id="ownerContact" name="ownerContact" placeholder="Enter owner's contact number" required>
        <br><br>
        <label for="ownerEmail">Owner Email:</label>
        <input type="email" id="ownerEmail" name="ownerEmail" placeholder="Enter owner's email" required>
        <br><br>
        <label for="imageUpload">Choose images to upload:</label>
        <input type="file" id="imageUpload" name="images" accept="image/*" multiple>
        <br><br>
        <label for="videoUpload">Choose video to upload:</label>
        <input type="file" id="videoUpload" name="file" accept="video/*" multiple>
        <div class="file-info" id="mp4Info"></div>
        <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Upload">
    </form>

    <div id="contact_slid">
        <a href="#" id="projects">Whatapp<i class="fas fa-comment"></i></a>
        <a href="#" id="contact">Call Us  <i class="fas fa-phone"></i></a>
        
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Suraj's Property Website. All rights reserved.</p>
        </div>
    </footer>

<script>
    function handleFileSelect(event, infoElementId) {
        const file = event.target.files[0];
        const infoElement = document.getElementById(infoElementId);
        if (file) {
            infoElement.textContent = `Selected file: ${file.name} 
            (${(file.size / 1024).toFixed(2)} KB)`;
        } else {
            infoElement.textContent = '';
        }
    }

    document.getElementById('videoUpload').addEventListener('change',
        (e) => handleFileSelect(e, 'mp4Info'));
    //document.getElementById('pdfInput').addEventListener('change',
    //    (e) => handleFileSelect(e, 'pdfInfo'));
</script>
</body>
</html>