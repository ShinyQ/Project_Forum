<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location: ./");
}else{
?><!DOCTYPE html>
<html>
<head>
	<title>Test Forum</title>
	<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
	<link rel="stylesheet" href="assets/fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/header.css">
</head>

<body> 
	<header class="z-depth-1 teal white-text">
		<span><i class="fa fa-comment"></i>&nbsp;&nbsp;&nbsp;Test Forum</span>
		<div id="header-button">
			<button id="setting-button" class="white z-depth-1 waves-effect"><i class="fa fa-cog"></i></button>
			<button id="user-button" class="white z-depth-1 waves-effect"><i class="fa fa-user"></i></button>
			<button id="user-button-close" class="white z-depth-1 waves-effect"><i class="fa fa-user"></i></button>
			<button id="search-button" class="white z-depth-1 waves-effect"><i class="fa fa-search"></i></button>
		</div>
		<div id="user-menu" class="white z-depth-3">
			<button class="white waves-effect">Profile</button>
			<button class="white waves-effect">Friends</button>
			<button class="white waves-effect">Groups</button>
			<button class="white waves-effect" id="logout-link">Log Out</button>
		</div>
	</header>
	<div id="border"></div>
	<div class="row" id="container">
		<div class="col l1 z-depth-1" id="side-menu">
			<button class="white teal-text waves-effect z-depth-2"><i class="fa fa-home"></i></button>
			<button class="white teal-text waves-effect z-depth-2"><i class="fa fa-comment"></i></button>
			<button class="white teal-text waves-effect z-depth-2"><i class="fa fa-envelope"></i></button>
			<button class="white teal-text waves-effect z-depth-2"><i class="fa fa-globe"></i></button>
			<button class="white teal-text waves-effect z-depth-2"><i class="fa fa-bookmark"></i></button>
			<button class="white teal-text waves-effect z-depth-2"><i class="fa fa-group"></i></button>
		</div>
		<div class="col l9 z-depth-1" id="content">
			<div class="card-panel">

			</div>
			<div class="card-panel">

			</div>
			<div class="card-panel">

			</div>
			<div class="card-panel">

			</div>
			<div class="card-panel">

			</div>
		</div>
		<div class="col l2 z-depth-1" id="onine-panel">
			<div class="card-panel">
				<span><i class="fa fa-user"></i>&nbsp;&nbsp;Kurniadi Ahmad Wijaya</span>
			</div>
			<div class="card-panel">
				<span><i class="fa fa-user"></i>&nbsp;&nbsp;Ahmad Hasib Haidar</span>
			</div>
			<div class="card-panel">
				<span><i class="fa fa-user"></i>&nbsp;&nbsp;Diva Mujaddidi</span>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<script src="assets/js/home.js"></script>
</body>

</html><?php }?>