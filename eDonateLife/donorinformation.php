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
            <li><a href="donorinformation.php">Donate Blood</a></li>
            <li><a href="view_donor_info.php">View Donor Information</a></li>
            <li><a href="view_donor_health_info.php">View Donor Health Information</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <section class="container-form">
        <h1>Personal Information Details</h1>
        <form action="view_donor_info.php" class="form" method="post">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" required name="fullname"/>
            </div>
            <div class="input-box">
                <label>IC Number</label>
                <input type="text" placeholder="Enter ic number" required name="icnumber"/>
            </div>
            <div class="input-box">
                <label>Matric Number</label>
                <input type="text" placeholder="Enter matric number" required name="matricno"/>
            </div>
            <div class="input-box">
                <label>Faculty</label>
                <div class="select-box">
                    <select name="faculty">
                        <option hidden>Faculty</option>
                        <option>FTMK</option>
                        <option>FTKM</option>
                        <option>FTKEK</option>
                        <option>FPTT</option>
                        <option>FTKE</option>
                    </select>
                </div>
            </div>
            <div class="input-box address">
                <label>Home Address</label>
                <input type="text" placeholder="Enter street address" required name="address1"/>
            </div>
            <div class="input-box">
                <label>Phone Number</label>
                <input type="tel" placeholder="Enter phone number" required name="phonenum"/>
            </div>
            <div class="column">
                <div class="gender-box">
                    <h3>Choose Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-a" name="gender" value="Male"/>
                            <label for="check-a">Male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-b" name="gender" value="Female"/>
                            <label for="check-b">Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Date of Birth</label>
                <input type="date" placeholder="Enter date of last donation" required name="dob"/>
            </div>
            <div class="input-box">
                <label>Age</label>
                <input type="text" placeholder="Enter your age" required name="age"/>
            </div>
            <button type="submit" name="submit" >Finish</button>
        </form>
    </section>

    <?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $fullname = $_POST["fullname"];
        $icnumber = $_POST["icnumber"];
        $matricno = $_POST["matricno"];
        $faculty = $_POST["faculty"];
        $address1 = $_POST["address1"];
        $phonenum = $_POST["phonenum"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $age = $_POST["age"];
    
        // Store form data in a session
        $_SESSION['form_data'] = [
            'fullname' => $fullname,
            'icnumber' => $icnumber,
            'matricno' => $matricno,
            'faculty' => $faculty,
            'address1' => $address1,
            'phonenum' => $phonenum,
            'gender' => $gender,
            'dob' => $dob,
            'age' => $age,
        ];
    
        // Redirect to the new page
        header("Location: view_donor_info.php");
        exit();
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
            <p class="rights-text">© 2023 Created By Adam Hakim.</p>
            <div class="credit">Made with <span style="color:tomato;font-size:20px;">❤</span> by <a  href="https://www.learningrobo.com/">Learning Robo</a></div>
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
