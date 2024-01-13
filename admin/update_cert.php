<?php
require_once("connection.php");

	if(isset($_POST['update']))
	{	
		$IDcert = $_GET['ID'];
		$Organizer = $_POST['organizer'];
		$Password = $_POST['certpwd'];
		
		$query = "UPDATE certificate set Organizer = '".$Organizer."', Password='".$Password."' where id=1";
		$result = mysqli_query($conn,$query);

		if($result)
		{
			header("location:index.php");
		}
		else
		{
			echo'Please Check Your Query';
		}
	}
	else
	{
		header("location:index.php");
	}
?>