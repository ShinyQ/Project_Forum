<?php
include "db_connect.php";
$Profil_Admin=mysqli_query($dbc,"select * from profil_admin where 
id_admin ='".$_SESSION['id_admin']."'")or die("Failed to query database " .mysqli_error($dbc));
$Data_Admin=mysqli_fetch_array($Profil_Admin);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Forum</title>
	<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
	<link rel="stylesheet" href="../assets/fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/header.css">
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
			<button class="white waves-effect">Log Out</button>
		</div>
	</header>
	<div id="border"></div>
	<div class="row" id="container">
