<?php
include_once 'adminheader1.php';
include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/blood.png" type="image/png" sizes="20x20">
	<title>Sign Up</title>
	<style>
		body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.signup-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 5px;
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
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

button {
    background-color: #003d99;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.error {
    color: #ff0000;
    margin-bottom: 10px;
}

.success {
    color: #008000;
    margin-bottom: 10px;
}
		</style>
</head>
<body>
<br>
		<section class="signup-form">
			<div style="background-color: #003d99"; class="header">
			<h2>Sign Up</h2>
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
				echo "<p>You have signed up!</p>";
				echo '</div>';
			}
		}
		?>

		</section>
		
		<section class="index-categories">
			
		</section>
		<br><br><br><br><br><br><br><br>

<?php
include_once 'footer.php';
?>

