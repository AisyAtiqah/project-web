<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
     $matric_idmatric_id = $_POST['matric_id'];
    // $phonenumber = $_POST['phonenumber'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            // Assuming you have a column named 'matric_id' in your user table
            $matric_id = $_POST['matric_id'];

            $sql = "INSERT INTO user(username, email, matric_id,  password)
                    VALUES ('$username', '$email', '$matric_id', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $name = "";
                $email = "";
                $matric_id = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
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
    <div class="container">
        <form action="login.php" method="POST" class="login-email">
            <p class="login-text">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Name" name="username" value="<?php echo $username; ?>" required>
            </div>

            <div class="input-group">
   				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
			</div>

            <div class="input-group">
                <input type="text" placeholder="Matric ID" name="matric_id" value="<?php echo $matric_id; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required pattern=".{8,}" title="8 characters minimum">
            </div>

            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $cpassword; ?>" required pattern=".{8,}" title="8 characters minimum">
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>

            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
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
