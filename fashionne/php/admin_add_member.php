<?php
	require_once('authenticate.php');
	include_once "connect.php";

	$FName = $_POST['fname'];
	$LName = $_POST['lname'];
	$Gender = $_POST['gender'];
	$Phone = $_POST['phone'];
	$State = $_POST['state'];
	$Type = $_POST['type'];
	$Email = $_POST['email'];
	$Password = md5($_POST['password']);

	$db->query("INSERT INTO member (fname,lname,gender,phone,state,type,email,password)
	 VALUES ('$FName','$LName','$Gender','$Phone','$State','$Type','$Email', '$Password')");
	header("Location: admin.php");
	mysqli_free_result($db);
	mysqli_close($db);
?>
