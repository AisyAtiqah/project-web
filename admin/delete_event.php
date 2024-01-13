<?php
require_once("connection.php");
	
	if(isset($_GET['Delevent']))
	{		
		$ID = $_GET['Delevent'];		
		$query = "delete from blood_event where event_id = '".$ID."'";
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
	else
	{
		header("location:event.php");
	}
?>