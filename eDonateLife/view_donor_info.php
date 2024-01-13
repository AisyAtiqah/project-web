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
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : '';
    $icnumber = isset($_POST["icnumber"]) ? $_POST["icnumber"] : '';
    $matricno = isset($_POST["matricno"]) ? $_POST["matricno"] : '';
    $faculty = isset($_POST["faculty"]) ? $_POST["faculty"] : '';
    $address1 = isset($_POST["address1"]) ? $_POST["address1"] : '';
    $phonenum = isset($_POST["phonenum"]) ? $_POST["phonenum"] : '';
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
    $dob = isset($_POST["dob"]) ? $_POST["dob"] : '';
    $age = isset($_POST["age"]) ? $_POST["age"] : '';
    // Repeat this for all other form fields

    // Display submitted data in a table
    echo '<div class="table-container">';
    echo '<h2>View Donor Information</h2>';
    echo '<table>';
    echo '<tr><td>Name</td><td>' . $fullname . '</td></tr>';
    echo '<tr><td>IC Number</td><td>' . $icnumber . '</td></tr>';
    echo '<tr><td>Matric Number</td><td>' . $matricno . '</td></tr>';
    echo '<tr><td>Faculty</td><td>' . $faculty . '</td></tr>';
    echo '<tr><td>Home Address</td><td>' . $address1 . '</td></tr>';
    echo '<tr><td>Phone Number</td><td>' . $phonenum . '</td></tr>';
    echo '<tr><td>Gender</td><td>' . $gender . '</td></tr>';
    echo '<tr><td>Date of Birth</td><td>' . $dob . '</td></tr>';
    echo '<tr><td>Age</td><td>' . $age . '</td></tr>';
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
