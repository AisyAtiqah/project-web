<?php
require_once("connection.php");

	if(isset($_POST['update']))
	{	
		$ID = $_GET['ID'];
		$EventDate = $_POST['edate'];
		$TimeStart = $_POST['tstart'];
		$TimeEnd = $_POST['tend'];
		$Venue = $_POST['venue'];
		$AddNote = $_POST['note'];
		
		$query = "UPDATE blood_event set Event_Date = '".$EventDate."', Time_Start='".$TimeStart."',Time_End='".$TimeEnd."',Venue='".$Venue."',Add_Note='".$AddNote."' where event_id='".$ID."'";
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