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
    <section class="container-form">
        <h1>Health Information Details</h1>
        <form action="view_donor_health_info.php" class="form" method="post">
            <div class="column">
                <div class="gender-box">
                    <h3>Blood Type</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-a" name="bloodType" value="A"/>
                            <label for="check-a">A</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-b" name="bloodType" value="B"/>
                            <label for="check-b">B</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-c" name="bloodType" value="AB"/>
                            <label for="check-c">AB</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-d" name="bloodType" va/>
                            <label for="check-d">O</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Weight</label>
                <input type="text" placeholder="Enter your weight(kg)" required name="weight"/>
            </div>
            <div class="input-box">
                <label>Have a chronic health problem? If yes, fill in there</label>
                <input type="text" placeholder="Chronic health problems" required name="chronichealth"/>
            </div>
            <div class="input-box">
                <label>Citizen</label>
                <div class="select-box">
                    <select name="citizen">
                        <option hidden>Citizen</option>
                        <option>Malaysia</option>
                        <option>Sudan</option>
                        <option>Palestine</option>
                        <option>Spain</option>
                        <option>Portugal</option>
                    </select>
                </div>
            </div>
            <div class="input-box">
                <p>Have you ever been:</p>
                <p>1)A drug addict who shares needles</p>
                <p>2)Engaged in prositituation</p>
                <p>3)Practiced same-sex</p>
                <p>4)Swapped sex partners?</p> <br>
                <div class="select-box">
                    <select name="yesOrno">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit">Finish</button>
        </form>
    </section>
    <?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $bloodType = $_POST["bloodType"];
        $weight = $_POST["weight"];
        $chronichealth = $_POST["chronichealth"];
        $citizen = $_POST["citizen"];
        $yesOrno = $_POST["yesOrno"];
    
        // Store form data in a session
        $_SESSION['form_data'] = [
            'bloodType' => $bloodType,
            'weight' => $weight,
            'chronichealth' => $chronichealth,
            'citizen' => $citizen,
            'yesOrno' => $yesOrno,
        ];
    
        // Redirect to the new page
        header("Location: viewdata.php");
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
