<?php
include "../config.php";
session_start();
?>
<title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    
    <style>
        /* Added styles for the new component */
       .project-status {
            background-color: #f7f7f7;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 20px;
        }
       .project-status h2 {
            margin-top: 0;
        }
       .project-status.budget {
            font-size: 24px;
            font-weight: bold;
            color: #337ab7;
        }
       .project-status.end-date {
            font-size: 18px;
            color: #666;
        }
      
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="../../index.php">Dashboard</a></li>
                    <li><a href="../ourproject.php">Our Projects</a></li>
                    <li><a href="feedbacktst.php">Feedback</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../../index.php">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="../logOut.php"><button class="btn">Logout</button></a>
            </div>
        </div>
    </nav>
    
    <h2 id="hello"> Hello <?php echo $_SESSION['Name'] . "," ?> </h2>

    <!-- Project Status Component -->
    <div class="project-status">
    <h2>Project Status</h2>
    <p class="budget">$10,000 remaining</p>
    <p class="end-date">End Date: <span id='end-date'>2025-01-01<span></p>
</div>
