<?php
require_once('authenticate.php');
include_once "connect.php";

	if( isset($_POST['id']) )
	{
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$phonenumber = $_POST['phonenumber'];
		$address = $_POST['address'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];


		if(empty($_POST['password'])) {
			$db->query("UPDATE tbl_customer SET first_name='$firstname', last_name='$lastname', gender='$gender', country='$country', phone_number='$phonenumber', address='$address', date_of_birth='$dob', email='$email'  WHERE id= '$id' ");
		} else {
			$password = md5($_POST['password']);
			$db->query("UPDATE tbl_customer SET first_name='$firstname', last_name='$lastname', gender='$gender', country='$country', phone_number='$phonenumber', address='$address', date_of_birth='$dob', email='$email',password = '$password'  WHERE id= '$id' ");
		}
		header("Location: customer.php");
	}
  mysqli_close($db);
?>
