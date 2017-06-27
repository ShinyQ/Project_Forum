<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	include "db_connect.php";
	$username = mysqli_real_escape_string($dbc, $_POST['username']);
	$password = mysqli_real_escape_string($dbc, $_POST['password']);
	$query = mysqli_query($dbc, "SELECT id FROM users WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 1){
		session_start();
		$_SESSION['username'] = $username;
	}else{
		echo "error";
	}
}else{
	header("location: ./");
}