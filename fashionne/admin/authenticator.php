<?php

include_once "connect.php";

$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = $db->real_escape_string($username);
        $password = $db->real_escape_string($password);
        $password = md5($password);

        $result = $db->query("SELECT first_name,last_name FROM tbl_staff WHERE email='$username' and password='$password'");
        $count = mysqli_num_rows($result);

        if($count == 1 ) {

            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['id'] = session_id();
            $_SESSION['user.fullname'] = $row['first_name']." ".$row['last_name'];
            header('Location: customer.php');
        }else {
             header('Location: index.php?error=true');
        }

        mysqli_free_result($result);
        mysqli_close($db);
    }
}
