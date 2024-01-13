<?php

include 'connection.php';

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/tooth.png" type="image/png" sizes="20x20">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Register Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
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
                <input pattern=".{8,}" type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required title="8 characters minimum">
            </div>
            <div class="input-group">
                <input pattern=".{8,}" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $cpassword; ?>" required title="8 characters minimum">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>
    </div>
</body>

</html>
