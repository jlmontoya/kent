<?php
	require_once('authenticate.php');
	include_once "connect.php";
	if(isset($_GET['del'])) {
		$id = $_GET['del'];
		$result = $db->query("DELETE FROM tbl_customer WHERE id='$id'");
			header("Location: customer.php");
	}
	mysqli_free_result($result);
	mysqli_close($db);
?>
