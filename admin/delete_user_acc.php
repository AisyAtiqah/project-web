<?php
require_once("connection.php");
	
	if(isset($_GET['Delacc']))
	{		
		$ID = $_GET['Delacc'];		
		$query = "delete from users where usersId = '".$ID."'";
		$result = mysqli_query($conn,$query);

		if($result)
		{
			header("location:view_user_details.php");
		}
		else
		{
			echo'Please Check Your Query';
		}
	}
	else
	{
		header("location:view_user_details.php");
	}
?>