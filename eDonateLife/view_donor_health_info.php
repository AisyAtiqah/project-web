<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>eDonateLife</title>
</head>
<body>
    <nav class="navbar-second flex">
        <div class="logo">
            <a href="homepage.html"><img class="image-style" src="images/icon-1.png" alt=""></a>
            <h1>eDonateLife</h1>
        </div>
        <ul class="flex">
            <li><a href="homepage.html">home</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="view_donor_info.php">View Donor Information</a></li>
            <li><a href="view_donor_health_info.php">View Donor Health Information</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $bloodType = isset($_POST["bloodType"]) ? $_POST["bloodType"] : '';
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : '';
    $chronichealth = isset($_POST["chronichealth"]) ? $_POST["chronichealth"] : '';
    $citizen = isset($_POST["citizen"]) ? $_POST["citizen"] : '';
    $yesOrno = isset($_POST["yesOrno"]) ? $_POST["yesOrno"] : '';
    // Repeat this for all other form fields

    // Display submitted data in a table
    echo '<div class="table-container">';
    echo '<h2>View Donor Health Information</h2>';
    echo '<table>';
    echo '<tr><td>Blood Type</td><td>' . $bloodType . '</td></tr>';
    echo '<tr><td>Weight</td><td>' . $weight . '</td></tr>';
    echo '<tr><td>Chronic Health</td><td>' . $chronichealth . '</td></tr>';
    echo '<tr><td>Citizen</td><td>' . $citizen . '</td></tr>';
    echo '<tr><td>Option</td><td>' . $yesOrno . '</td></tr>';
    // Repeat this for all other form fields
    echo '</table>';
    echo '</div>';
} else {
    echo '<p>No data submitted.</p>';
}
?>
<footer>
        <div class="footer-container">
          <div class="left-col">
            <img src="images/medical-report.png" alt="" class="logo">
            <div class="social-media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="right-texts">Copyright &copy;Group CC, 2023</p>
          </div>
  
          <div class="right-col">
            <h1>Our Newsletter</h1>
            <div class="border"></div>
            <p>Enter Your Email to get our news and updates.</p>
            <form action="" class="newsletter-form">
              <input type="text" class="txtb" placeholder="Enter Your Email">
              <input type="submit" class="btn" value="submit">
            </form>
          </div>
        </div>
      </footer>
</body>
</html>
