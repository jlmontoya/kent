<?php
	require_once('authenticate.php');
	include_once "connect.php";
	$name = $_POST['name'];
	$db->query("INSERT INTO tbl_category (name,parent_id)
	 VALUES ('$name', 0)");
	header("Location: category.php");
	mysqli_free_result($db);
	mysqli_close($db);
?>
