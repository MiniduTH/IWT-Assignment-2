<?php
include "config.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$accType = $_POST['accType'];
$result = 0;


if ($accType == 'C') {
    $select = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
    $result = $conn->query($select);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    $_SESSION['Name'] = $row['first_name'];
    $msg = "<div class='message'>Logged in successfully</div><a href='logOut.php'><p>Log Out</p></a>";
    $_SESSION['status'] = 1;
} else {
    $msg = "<div class='message'>Login failed. Please try again.</div><a href='login.html'><p>Try again</p></a>";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            padding: 20px;
        }

        .message {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
            color: #333;
            font-size: 16px;
            margin-top: 10px;
            text-align: center;
        }

        main a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            color: #00ffff;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
    <div class="container">
        <div class="header_left">
            <h1 class="logo">BuildMaster</h1>
            <ul class="nav-links">
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="index.html">Our Projects</a></li>
                <li><a href="index.html">Feedback</a></li>
                <li><a href="src/contactUs.html">Contact Us</a></li>
                <li><a href="index.html">About Us</a></li>
            </ul>
        </div>
        
    </div>
    </nav>
    <main>
    <?php echo $msg; ?>
    <a href="../index.php"><p>Go back to home</p></a>
    </main>
    <footer>
    <div class="footer-container">
        <p>&copy; 2024 Construction Management System. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
