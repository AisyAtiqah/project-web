<?php
require_once("includes/dbh.inc.php");

	if(isset($_POST['update']))
	{
		$IDu = $_GET['IDu'];
		$Name = $_POST['name'];
		$IcNumber = $_POST['ic'];
		$MatricNumber = $_POST['matric'];
		$Faculty = $_POST['faculty'];
		$Course = $_POST['course'];
		$Address = $_POST['address'];
		$Telephone = $_POST['telephone'];
		$Gender = $_POST['genders'];
		$Birthday = $_POST['date'];
		$Age = $_POST['age'];

		$query = "UPDATE user_details set Full_Name = '".$Name."', Ic='".$IcNumber."',Matric='".$MatricNumber."',Faculty='".$Faculty."',Course='".$Course."',Address='".$Address."',Telephone='".$Telephone."',Gender='".$Gender."', Birthday='".$Birthday."', Age='".$Age."' where id='".$IDu."'";
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