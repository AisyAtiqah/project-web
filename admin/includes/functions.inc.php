<?php

require_once("dbh.inc.php");

function emptyInputSignup($email, $username, $pwd, $pwdRepeat)
{
	$result;
	if (empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function invalidUid($username)
{
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function invalidEmail($email)
{
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdRepeat)
{
	$result;
	if ($pwd !== $pwdRepeat) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $email)
{
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else
	{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $username, $pwd)
{
	$sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../signup.php?error=none"); //send them to page signup if success signup
		exit();
}

function emptyInputLogin($username, $pwd)
{
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd)
{
	$uidExists = uidExists($conn, $username, $username);

	if ($uidExists == false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd == false) {
		header("location: ../login.php?error=passwronglogin");
		exit();
	}
	else if($checkPwd == true)
	{
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../index.php");
		exit();
	}
}

function confirm($count)
{
	$count++;
	header("location: ../index.php?answer=yes");
    exit();
}

function notconfirm($count)
{
	$count;
	header("location: ../index.php?answer=no");
    exit();
}

//-----------------------------------------------------

function pwdExists($conn, $Organizer)
{
	$sql = "SELECT * FROM certificate WHERE Organizer = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../view_details.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $Organizer);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else
	{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function emptyInputPwd($Organizer, $Password)
{
	$result;
	if (empty($Organizer) || empty($Password)) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function certificate($conn, $Organizer, $Password)
{
	$pwdExists = pwdExists($conn, $Organizer);

	if ($pwdExists == false) {
		header("location: view_details.php?error=dalamwrongorganize"); //salah organizer
		exit();
	}

	$pwd = $pwdExists["Password"];
	//$checkPwd = password_verify($Password, $pwd);

	if ($Password != $pwd) {
		header("location: view_details.php?error=yekewronglogin"); //salah password
		exit();
	}
	else if($Password == $pwd)
	{	
		if(isset($_GET['ID']))
		{		
			$ulogin = $_SESSION["userid"];
			$ID = $_GET['ID'];	

			$query = "SELECT e.Event_Date, e.Venue, h.Blood FROM blood_event e JOIN confirm_attend c ON c.eventFK = e.event_id JOIN health_details h ON h.usersFK = c.usersFK WHERE c.eventFK = e.event_id AND c.id_bd = '$ID';"; 
		    $result = mysqli_query($conn,$query);		   
		   
			while($row=mysqli_fetch_assoc($result))
		    {   
				$Name = $row['Full_Name'];
				$IcNumber = $row['Ic'];		
				$Faculty = $row['Faculty'];		
				$Gender = $row['Gender'];
				$Blood = $row['Blood'];
				$EventDate = $row['Event_Date'];		
				$Venue = $row['Venue'];			    
								
				$query_bd = "INSERT INTO blood_donors (usersFK, id_bdFK, Blood, Event_Date, Venue) values ('$ulogin','$ID','$Blood','$EventDate', '$Venue')";
				$result_bd = mysqli_query($conn,$query_bd);

				if($result_bd)
				{
					header("location:done.php");
				}
				else
				{
					echo'Please Check Your Query';
				}
			}
		}
				
	}
}
