<?php

if (isset($_POST["submit"])) {
	$adminname = $_POST["adminuid"];
	$adminpwd = $_POST["adminpwd"];

	require_once 'connection.php';
	require_once 'functions.inc.php';

	if (emptyInputLogin($adminname, $adminpwd) !== false) {
		header("location: logadmin.php?error=emptyinput");
		exit();
	}	
	
	loginUser($conn, $adminname, $adminpwd);	
}
else
{
	header("location: ../login.php");
	exit();
}