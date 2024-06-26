<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Construction System</title>
    <link rel="stylesheet" href="../CSS/projectmanager.css">
    <link rel="stylesheet" href="../CSS/style.css">]
    <script src="js/projectmanger.js"></script>
</head>
<body>
  <header>
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="../../index.php">Dashboard</a></li>
                    <li><a href="../ourproject.php">Our Projects</a></li>
                    <li><a href="index.php">Feedback</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="index.php">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="../logOut.php"><button class="btn">Logout</button></a>
            </div>
        </div>
    </nav>
</header>


<!-- Button bar -->

    <!-- Notification Bell Icon -->
    <div class="notification">
        <img src="../img/menu.png">
        <img src="../img/Mute.png">
        <img src="../img/notification.png" alt="Notification Icon" id="notificationIcon">
        
       

    </div>

   <!-- Popup Notification Section -->
   <div class="popup" id="popup">
    <div class="popup-content">
        <span class="close" id="closePopup">&times;</span>
        <p id="notificationMessage">Need to checkout project #001</p>
    </div>
</div>
<!-- End of Popup Notification Section -->
 

    <!-- Header Content -->
    <div class="head">
        <h1 class="name">Welcome <?php $_SESSION['Name']?></h1>
       
    </div>
    <!-- End of Header Content -->

    <!-- Text Uploader Section -->
    <div class="container1">
        <h1>See Project Details Here</h1>
        <div class="upload-section">
            <input type="file" id="file-input" multiple>
            <button onclick="uploadText()" class="button">Upload</button>
        </div>
        <div id="text-list" class="text-list"></div>
        <button onclick="downloadSelected()" class="button download-button">Download Selected</button>
        <button onclick="deleteSelected()" class="button delete-button">Delete Selected</button>
    </div>
    <!-- End of Text Uploader Section -->
<!-- Chart -->
<div class="chart">
  <h3>Project Progress</h3>
  <div class="bar" data-progress="10">Customer 10</div>
  <div class="bar" data-progress="50">Customer 2</div>
  <div class="bar" data-progress="90">Customer 3</div>
  <div class="bar" data-progress="30">Customer 4</div>
  <div class="bar" data-progress="70">Customer 5</div>
  <div class="bar" data-progress="20">Customer 6</div>
</div>


<!-- End of Chart -->

<!-- Calander -->
<div class="calendar">
    <label for="day">Select Day:</label>
    <select id="day">
      <!-- Options for days -->
      <!-- You can generate these dynamically using JavaScript if needed -->
      <!-- For simplicity, let's assume 1 to 31 days -->
      <option value="1">1</option>
      <option value="2">2</option>
      <!-- Add options for all days -->
      <option value="31">31</option>
    </select>
    
    <label for="month">Select Month:</label>
    <select id="month">
      <option value="1">January</option>
      <option value="2">February</option>
      <!-- Add options for all months -->
      <option value="12">December</option>
    </select>
    
    <label for="year">Select Year:</label>
    <input type="number" id="year" min="1900" max="2100" value="2022">
    
    <textarea id="text-input" placeholder="Enter your text here"></textarea>
    <button onclick="saveText()">Save</button>
  </div>
  
  <!-- End of calander -->

<!-- Notice -->
<div class="notice-board">
    <h2>Notices</h2>
    <ul id="notices-list">
      <!-- Notices will be added dynamically here -->
    </ul>
    <div class="add-notice">
      <textarea id="new-notice" placeholder="Type your notice here"></textarea>
      <button onclick="addNotice()">Add Notice</button>
    </div>
  </div>
<!-- End of Notice -->
<footer>
  <div class="footer-container">
      <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>