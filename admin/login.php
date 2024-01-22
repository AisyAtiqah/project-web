<?php
include_once 'adminheader1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/blood.png" type="image/png" sizes="20x20">
	<title>Log In</title>
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
			<h2>Log In</h2>
			</div>
			<form action="includes/login.inc.php" method="post">
				<div class="input-group">
				<label>Username/Email</label>
				<input type="text" name="uid" placeholder="Username/Email">
				</div>
				<div class="input-group">
				<label>Password</label>				
				<input type="password" name="pwd" placeholder="Password">
				</div>				
				<button type="submit" class="btn btn-primary" name="submit">Log In</button>
			</form>

			<?php

		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo '<div class="error">';	
				echo "<p>Fill in all fields!</p>";
				echo '</div>';
			}
			else if ($_GET["error"] == "wronglogin") {
				echo '<div class="error">';	
				echo "<p>Incorrect username!</p>";
				echo '</div>';
			}	
			else if ($_GET["error"] == "passwronglogin") {
				echo '<div class="error">';	
				echo "<p>Incorrect password!</p>";
				echo '</div>';
			}					
		}
		?>
		</section>

		<section class="index-categories">
			
		</section>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
include_once 'footer.php';
?>
