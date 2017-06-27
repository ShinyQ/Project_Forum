<?php
session_start();
if(isset($_SESSION['username'])){
	header("location: home.php");
}else{?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Test Forum</title>
	<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
	<link rel="stylesheet" href="assets/fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<div id="login" class="card-panel">
		<form id="login-form">
			<input type="text" name="username" id="username" placeholder="&#xf007;&nbsp;&nbsp;Username">
			<input type="password" name="password" id="password" placeholder="&#xf023;&nbsp;&nbsp;Password">
			<input type="submit" name="submit" id="submit" value="Login" class="btn">
			<button class="btn white teal-text" id="process-animation"><i class="fa fa-spin fa-circle-o-notch"></i>&nbsp;&nbsp;Processing..</button>
			<div id="error-notif" class="white red-text z-depth-1">Login Failed</div>
			<div id="error-notif2" class="white red-text z-depth-1">Username or Password not Found</div>
			<a href="resetpass.php" target="_blank" id="resetpass-link">Reset Password</a>
			<div id="redirecting-animation" class="teal-text"><i class="fa fa-spin fa-circle-o-notch"></i>&nbsp;&nbsp;Redirecting..</div>
		</form>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<script src="assets/js/login.js"></script>
</body>
</html><?php }?>