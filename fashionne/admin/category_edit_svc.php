<?php
require_once('authenticate.php');
include_once "connect.php";

	if( isset($_POST['id']) )
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$db->query("UPDATE tbl_category SET name='$name' WHERE id= '$id' ");
		header("Location: category.php");
	}
  mysqli_free_result($db);
  mysqli_close($db);
?>
