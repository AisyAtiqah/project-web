<?php
include_once 'adminheader1.php';
include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New User Account</title>
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
}

.signup-form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
    background-color: #003d99;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.input-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: calc(100% - 20px);
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

button {
    background-color: #003d99;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #001a66;
}
        </style>

</head>
<body>

		<section class="signup-form">
			<div style="background-color: #003d99"; class="header">
			<h2>Add New User Account</h2>
			</div>			
			<form action="includes/signup.inc.php" method="post">					
			<div class="input-group">
				<label>Email</label>			
				<input type="text" name="email" placeholder="Email">
			</div>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="uid" placeholder="Username">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="pwd" placeholder="Password">
			</div>
			<div class="input-group">
				<label>Repeat Password</label>
				<input type="password" name="pwdrepeat" placeholder="Repeat Password">
			</div>
				<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
			</form>		
			<?php

		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo '<div class="error">';							
				echo "<p>Fill in all fields!</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "invaliduid") {
				echo '<div class="error">';	
				echo "<p>Choose a proper username! Username cannot have space!</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "invalidemail") {
				echo '<div class="error">';	
				echo "<p>Choose a proper email! Must include @ and .com</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "passwordsdontmatch") {
				echo '<div class="error">';	
				echo "<p>Passwords doesn't match!</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "stmtfailed") {
				echo '<div class="error">';	
				echo "<p>Something went wrong, try again!</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "usernametaken") {
				echo '<div class="error">';	
				echo "<p>Username already exist!</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "none") {
				echo '<div class="success">';	
				echo "<p>New User successfully created!</p>";
				echo '</div>';
			}
		}
		?>

		</section>

		<br><center><a href="index.php" class="btn btn-secondary">Back</a></center>
		
		<br><br><br><br><br><br>

<?php
include_once 'footer.php';
?>
