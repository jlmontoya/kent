<?php
	include_once "connect.php";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$timestamp = date('Y-m-d G:i:s');

	$dateFormated = split('/', $dob);
  $date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];

 $db->query("INSERT INTO tbl_customer (first_name, last_name, email, gender, country, address, phone_number, password, date_of_birth,date_created)
		 VALUES ('$firstname','$lastname','$email','$gender', '$country','$address','$phonenumber','$password', '$date', now()  )");

	mysqli_close($db);

	header("Location: ../");
?>
