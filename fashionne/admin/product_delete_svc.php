<?php
	require_once('authenticate.php');
	include_once "connect.php";
	if(isset($_GET['del'])) {
		$id = $_GET['del'];
		$result1 = $db->query("SELECT photo_path FROM tbl_product WHERE id='$id'");
		$result2 = $db->query("DELETE FROM tbl_product WHERE id='$id'");

		 while($row = $result1->fetch_assoc()) {
			 if(file_exists('../'.$row['photo_path']))
			 	unlink('../'.$row['photo_path']);
		 }

			header("Location: product.php");
	}
	mysqli_free_result($result1);
	mysqli_free_result($result2);
	mysqli_close($db);
?>
