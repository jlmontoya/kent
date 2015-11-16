<?php 
require_once('authenticate.php');
include_once "connect.php";
 
	if( isset($_POST['id']) )
	{ 
		$id = $_POST['id'];
		$FNewName = $_POST['fname'];
		$LNewName = $_POST['lname'];
		$Phone = $_POST['phone'];
		$State = $_POST['state'];
		$Type = $_POST['type'];
		$Email = $_POST['email'];

		$db->query("UPDATE member SET fname='$FNewName', lname='$LNewName', phone='$Phone', state='$State', type='$Type', email='$Email' WHERE id= '$id' ");
		header("Location: admin.php");
	}
mysqli_free_result($db);
mysqli_close($db);
?>