<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Log In</title>
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
	
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
      background-color:#003399;
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

		.error {
			background-color: #ffe6e6;
			color: #cc0000;
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 10px;
		}
	</style> -->
</head>
<body>
	 <!-- Top Navigation Bar -->
<nav>
    <a href="home.php">Home</a>
    <a href="homeDonationCenter.html">Logout</a>
    <a href="#" class="icon" onclick="toggleNav()">&#9776;</a>
  </nav>


<section class="signup-form">
	<div class="header">
		<h2>Admin Log In</h2>
	</div>
	<form action="includes/login.inc.php" method="post">
		<div class="input-group">
			<label>Username/Email</label>
			<input type="text" name="adminuid" placeholder="Username/Email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="adminpwd" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary" name="submit">Log In</button>
	</form>

	<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
			echo '<div class="error">';
			echo "<p>Fill in all fields!</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "wronglogin") {
			echo '<div class="error">';
			echo "<p>Incorrect username!</p>";
			echo '</div>';
		} elseif ($_GET["error"] == "passwronglogin") {
			echo '<div class="error">';
			echo "<p>Incorrect password!</p>";
			echo '</div>';
		}
	}
	?>
</section>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include_once 'footer.php';
?>
</body>
</html>
