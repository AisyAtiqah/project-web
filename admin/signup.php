<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New User Account</title>
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
	<link rel="stylesheet" href="style.css">
	<!-- <style>
		body {
			font-family: bahnschrift, sans-serif;
			background-color: #f0f0f0;
			margin: 0;
			padding: 0;
		}

		.header {
			background-color: #003d99;
			color: white;
			text-align: center;
			padding: 10px;
		}

		 /* Top Navigation */
    nav {
      background-color: #003399;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 16px;
    }

    nav a:hover {
      background-color: white;
      color: black;
    }

    nav a.icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      nav a:not(:first-child) {
        display: none;
      }

      nav a.icon {
        float: right;
        display: block;
      }

      nav.responsive {
        position: relative;
      }

      nav.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      nav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }


		.signup-form {
			max-width: 400px;
			margin: 20px auto;
			background: white;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.input-group {
			margin-bottom: 15px;
		}

		.input-group label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		.input-group input {
			width: 100%;
			padding: 8px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}

		.btn-primary {
			background-color: #003d99;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}

		.btn-secondary {
			background-color: #333;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			text-decoration: none;
		}

		.error {
			background-color: #ffe6e6;
			color: #cc0000;
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		.success {
			background-color: #d9f7d9;
			color: #006600;
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 10px;
		}
	</style> -->
</head>
<body>
<nav>
    <a href="home.php">Home</a>
    <a href="view_user_details.php">User Information</a>
    <a href="event.php">Blood Donation Event</a>
    <a href="#">Blood Donation Data</a>
    <a href="#">Logout</a>
    <a href="#" class="icon" onclick="toggleNav()">&#9776;</a>
  </nav>


<section class="signup-form">
	<div class="header">
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
		} elseif ($_GET["error"] == "invaliduid") {
			echo '<div class="error">';
			echo "<p>Choose a proper username! Username cannot have space!</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "invalidemail") {
			echo '<div class="error">';
			echo "<p>Choose a proper email! Must include @ and .com</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "passwordsdontmatch") {
			echo '<div class="error">';
			echo "<p>Passwords don't match!</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "stmtfailed") {
			echo '<div class="error">';
			echo "<p>Something went wrong, try again!</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "usernametaken") {
			echo '<div class="error">';
			echo "<p>Username already exists!</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "none") {
			echo '<div class="success">';
			echo "<p>New User successfully created!</p>";
			echo '</div>';
		}
	}
	?>
</section>

<br><center><a href="home.php" class="btn btn-secondary">Back</a></center>

<br><br><br><br><br><br>

<?php
 include_once 'footer.php';
?>
</body>
</html>
