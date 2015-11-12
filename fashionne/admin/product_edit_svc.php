<?php
require_once('authenticate.php');
include_once "connect.php";

	if( isset($_POST['id']) )
	{

		$target_dir = "../uploads/";
		$target_file = $target_dir . uniqid() . "-" . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$uploadMessage = "";

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $uploadMessage = "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        $uploadMessage = "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    $uploadMessage = "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    $uploadMessage = "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $uploadMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $uploadMessage = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        $uploadMessage = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        $uploadMessage = "Sorry, there was an error uploading your file.";
						$uploadOk = 0;
		    }
		}

		$id = $_POST['id'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		$price = $_POST['price'];
		$photo_path = substr($target_file,3);

		if ($uploadOk && !empty($_FILES["fileToUpload"]["name"])) {
			$result = $db->query("SELECT photo_path FROM tbl_product WHERE id= '$id' ");
			while($row = $result->fetch_assoc()) {
				if(file_exists('../'.$row['photo_path']))
				 unlink('../'.$row['photo_path']);
			}
			$db->query("UPDATE tbl_product SET name='$name', category_id='$category', size='$size', color='$color', photo_path='$photo_path', price=$price WHERE id= '$id' ");
		} else {
			$db->query("UPDATE tbl_product SET name='$name', category_id='$category', size='$size', color='$color', price=$price WHERE id= '$id' ");
		}

		header("Location: product.php");
	}
  mysqli_free_result($result);
  mysqli_close($db);
?>
