<?php 

include 'config.php'; 

session_start();
error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: home.php");
// } 

$login_attempts_key = 'login_attempts';
$max_login_attempts = 3;
$wait_time = 30; // seconds

if (isset($_POST['submit'])) {
    $email= $_POST['email'];
    $matric_id = $_POST['matric_id'];
    $password = md5($_POST['password']);

    // Check if the user has exceeded the maximum login attempts
    if ($_SESSION[$login_attempts_key] >= $max_login_attempts) {
        $remaining_wait_time = $wait_time - (time() - $_SESSION['last_login_attempt']);
        if ($remaining_wait_time > 0) {
            echo "<script>alert('Too many login attempts. Please try again after $remaining_wait_time seconds.')</script>";
            exit(); // Stop further execution
        } else {
            // Reset login attempts
            $_SESSION[$login_attempts_key] = 0;
        }
    } 


    $sql = "SELECT * FROM user WHERE matric_id ='$matric_id' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['user_id'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Woops! Phonenumber or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>eDonateLife</title>
    <style>
        /* Reset some styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            border-radius: 8px;
            justify-content: center;
        }

        .login-email {
            text-align: center;
        }

        .login-text {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        button.btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button.btn:hover {
            background-color: #45a049;
        }

        .login-register-text {
            margin-top: 15px;
            font-size: 16px;
            color: #555;
        }

        .login-register-text a {
            color: #4CAF50;
            text-decoration: none;
        }

        .login-register-text a:hover {
            text-decoration: underline;
        }
    </style>
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
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</div>
<body>
    <div class="container">
        <form action="donorinformation.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
</div>

            <div class="input-group">
                <input type="text" placeholder="Matric_Id" name="matric_id" value="<?php echo $matric_id; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
             <p class="login-register-text"><a href="register.php"><a href="forgot.php" id="forgot">Forgot Your Password?</a>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
        </form>
    </div>
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