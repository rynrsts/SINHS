<?php

	require('connection.php');

	$ids = $_POST['id'];
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$age = $_POST['age'];
	$un = $_POST['uname'];
	$pw = $_POST['pword'];

	$sqlUpdate = "UPDATE tbl_register SET firstname = '$fn', lastname = '$ln', age = '$age', 
		username = '$un', password = '$pw' WHERE id = $ids";

	mysqli_query($link, $sqlUpdate) or die(mysqli_error($link));
	mysqli_close($link);

	echo "<script>alert('The data has been updated.')</script>";
	echo "<script>window.location.assign('Accounts.php')</script>";

?>