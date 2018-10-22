<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"]; 

include_once("connect.php");
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $re = mysqli_query($conn, $sql);

	if (mysqli_num_rows($re)) {
		$_SESSION['username'] = $username;
		header("Location: landing.php");
	}else{
		echo "Error : Invalid Login Credentials";
	}
?>