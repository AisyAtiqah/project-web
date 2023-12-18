<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/blood.png" type="image/png" sizes="20x20">
	<title>Log In</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" a href="bootstrap.css">
	<link rel="stylesheet" a href="tab.css"> 
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
