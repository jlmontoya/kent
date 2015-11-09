<?php
	require_once('authenticate.php');


	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$uploadErrorMessage = "";

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        $uploadErrorMessage = "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        $uploadErrorMessage = "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    $uploadErrorMessage = "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    $uploadErrorMessage = "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $uploadErrorMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    $uploadErrorMessage = "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        $uploadErrorMessage = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        $uploadErrorMessage = "Sorry, there was an error uploading your file.";
	    }
	}


	include_once "connect.php";
	$name = $_POST['name'];
	$category = $_POST['category'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$price = $_POST['price'];
	$photo_path = substr($target_file,3);

	$db->query("INSERT INTO tbl_product (category_id,name,size,color,photo_path,price)
	 VALUES ($category,'$name','$size','$color','$photo_path',$price)");
	header("Location: product.php");
	mysqli_free_result($db);
	mysqli_close($db);
?>
