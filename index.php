<?php
session_start();
if(!isset($_SESSION['username'])){?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Forum</title>
	<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
	<link rel="stylesheet" href="assets/fa/css/font-awesome.min.css">
</head>
<body>Ini halaman sebelum login<br><a href="login.php">Login</a>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<script src="assets/js/index.js"></script>
</body>
</html>
<?php }else{
	header("location: home.php");
}?>