<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/login.css">
    
</head>
<body>
     <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="ourproject.php">Our Projects</a></li>
                    <li><a href="index.php">Feedback</a></li>
                    <li><a href="src/contact.php">Contact Us</a></li>
                    <li><a href="index.php">About Us</a></li>
                </ul>
            </div>
            
        </div>
    </nav>

    <div class="login-form-container">
    <form class="login-form" action="checkLogin.php" method="post">
        <h2>Login</h2>
        <label for="email">Username:</label>
        <input type="email" id="email" name="email" placeholder="sample@email.com" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="account-type">Account Type:</label>
        <div class="account-type">
            <input type="radio" id="client" name="accType" value="C" required>
            <label for="client">Client</label>
            <input type="radio" id="staff" name="accType" value="S" required>
            <label for="staff">Staff</label>
        </div>
        <button type="submit">Login</button>
        
        <p class="register-link">Don't have an account? <a href="signUp.php">Sign up</a></p>
    </form>
    <br>

</div>



<footer>
    <div class="footer-container">
        <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>