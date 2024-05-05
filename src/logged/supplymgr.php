<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    
    <link rel="stylesheet" href="../CSS/feedback.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="header_left">
                    <h1 class="logo">BuildMaster</h1>
                    <ul class="nav-links">
                        <li class="active"><a href="../../index.php">Dashboard</a></li>
                        <li><a href="index.php">Our Projects</a></li>
                        <li><a href="index.php">Feedback</a></li>
                        <li><a href="../contact.html">Contact Us</a></li>
                        <li><a href="index.php">About Us</a></li>
                    </ul>
                </div>
                <div class="login-signup">
                    <a href="../logOut.php"><button class="btn">Logout</button></a>
                </div>
            </div>
        </nav>
    </header>
    
    <table>
        <thead>
          <tr>
            <th>Item No.</th>
            <th>Name</th>
            <th>Description</th>
            <th>Remaining Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <tbody>
                <?php
                include "../config.php";

                session_start();

                $email = $_SESSION['email'];
     
                $result = mysqli_query($conn, "SELECT * FROM inventory");
              
              
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["item_no"] . "</td>";  
                  echo "<td>" . $row["name"] . "</td>";
                  echo "<td>" . $row["description"] . "</td>";
                  echo "<td>" . $row["remaining_amount"] . "</td>";
                  echo '<td>
                    
                    <form action="editfeedback.php" method="post">
                    <input type="hidden" name="id" value="'. $row["id"] . '">
                    <button type="submit">Edit</button></form>
                     <form action="deletefeedback.php" method="post">
                        <input type="hidden" name="id" value="' . $row["id"] . '">
                        <button type="submit">Delete</button>
                    </form>                               </td>';
                  echo "</tr>";
                }
              
                mysqli_close($conn);
                ?>
                </tbody>
              </table>


    <footer>
        <div class="footer-container">
            <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>