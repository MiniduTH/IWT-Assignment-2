<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/signUp.css">
    <script src="js/signUp.js"></script>
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
                    <li><a href="viewfeedback.php">Feedback</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>
            
        </div>
    </nav>

    <main>
        
        <form onsubmit="return checkPassword()" action="signUpSubmit.php" method="post" class="glass-form">
            <fieldset class="form-fieldset">
                <legend class="form-legend">Sign Up</legend>
                <label class="form-label" for="fname">Name : </label>
                <input class="form-input" id="fname" type="text" placeholder="First Name" name="fname" required />
                <input class="form-input" id="lname" type="text" placeholder="Last Name" name="lname" />
        
                <label class="form-label" for="dob">Date of Birth : </label>
                <input class="form-input" id="dob" type="date" name="dob" required />
        
                <label class="form-label" for="gender">Gender : </label>
                <input class="form-radio" type="radio" id="male" name="gender" value="M" required/>Male
                <input class="form-radio" type="radio" id="female" name="gender" value="F"/>Female
        
                <label class="form-label" for="tel">Mobile No. : </label>
                <input class="form-input" id="tel" type="tel" name="tel" required placeholder="07x xxx xxxx" />
        
                <label class="form-label" for="addr">Address : </label> <br>
                <textarea class="form-textarea" id="addr" required placeholder="Enter your Address" cols="50" rows="4" name="addr"></textarea><br>
        
                <label class="form-label" for="email">Email Address: </label>
                <input class="form-input" id="email" type="email" required name="email" placeholder="sample@example.com" />
        
                <label class="form-label" for="pwd">Enter a Password : </label>
                <input class="form-input" id="pwd" type="password" name="pwd" required placeholder="***********" />
        
                <label class="form-label">Confirm Password : </label>
                <input class="form-input" id="cpwd" type="password" required placeholder="***********" />
        
                <input class="form-checkbox" id="checkBox" type="checkbox" >Accept <a href="terms.php">Terms and conditions</a> <br>
        
                <button class="form-button" id="sign-btn" disabled>Sign Up</button>
            
            </fieldset>
        </form>
        
        </fieldset>
        <div class="center-container">
            <p class="center">Already have an account?</p>
            <a href="logIn.php"><button class="signUp-Only-button">Log In</button></a>
          </div>
           <footer>
                <div class="footer-container">
                    <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
                </div>
            </footer>

</body>
<script>
    document.getElementById('dob').max = new Date().toISOString().split('T')[0];
    document.getElementById('checkBox').addEventListener('click', enableButton);

</script>
</html>
