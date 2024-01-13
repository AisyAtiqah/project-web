<?php 

include 'connection.php'; 

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </div>
    <link rel="icon" href="img/tooth.png" type="image/png" sizes="20x20">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Login</title>
</head>


<style>
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#Adminlogin {
  top: 20px;
  background-color: #000099;
}

#Doctorlogin {
  top: 90px;
  background-color: #3333ff;
}

#Userlogin {
  top: 160px;
  background-color: #00b8e6;
}
#Service {
  top: 200px;
  background-color: #66ccff;
}
#Contactus {
  top: 240px;
  background-color: #66ccff;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="login.php" id="Adminlogin">User Login</a>



</div>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
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
</body>
</html>