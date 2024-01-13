<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Blood Donation Event</title>
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
	<link rel="stylesheet" href="style.css">
 
</head>
<body>

		<section class="index-intro">
			<?php
			if (isset($_SESSION["useruid"]))
			{
				echo "<p>Hello " .$_SESSION["useruid"]. "</p>";
			}			
			?>
			<h1>This is an introduction</h1>
			<p>Hello there!</p>
		</section>
		<section class="index-categories">			
		</section>
		<?php

require_once("connection.php");

if(isset($_POST['submit']))
	{
		if(empty($_POST['edate']) || empty($_POST['tstart']) || empty($_POST['tend']) || empty($_POST['venue']) || empty($_POST['note'])) 
		{
			echo'<script> alert("Please Fill in all the Blanks");window.location="main.php" </script>';
		}
		else
		{
			$EventDate = $_POST['edate'];
			$TimeStart = $_POST['tstart'];
			$TimeEnd = $_POST['tend'];
			$Venue = $_POST['venue'];
			$AddNote = $_POST['note'];
			
			$query = "INSERT INTO blood_event (Event_Date, Time_Start, Time_End, Venue, Add_Note) values ('$EventDate','$TimeStart','$TimeEnd','$Venue','$AddNote')";			
			$result = mysqli_query($conn,$query);

			if($result)
			{
				header("location:event.php");				
			}
			else
			{
				echo'Please Check Your Query';
			}
		}
	}
	else
	{
		header("location:event.php");
	}
?>
<br><br><br><br><br><br>	

<?php
include_once 'footer.php';
?>
