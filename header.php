<!DOCTYPE html>
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
			<button class="white teal-text waves-effect z-depth-2 hoverable" id="home-btn"><i class="fa fa-home"></i><span class="sidemenu-tooltip" id="homebtn-tooltip">Home</span></button>
			<button class="white teal-text waves-effect z-depth-2 hoverable" id="discus-btn"><i class="fa fa-comment"></i><span class="sidemenu-tooltip" id="discusbtn-tooltip">Diskusi</span></button>
			<button class="white teal-text waves-effect z-depth-2 hoverable" id="msg-btn"><i class="fa fa-envelope"></i><span class="sidemenu-tooltip" id="msgbtn-tooltip">Pesan</span></button>
			<button class="white teal-text waves-effect z-depth-2 hoverable" id="notif-btn"><i class="fa fa-globe"></i><span class="sidemenu-tooltip" id="notifbtn-tooltip">Pemberitahuan</span></button>
			<button class="white teal-text waves-effect z-depth-2 hoverable" id="bookmark-btn"><i class="fa fa-bookmark"></i><span class="sidemenu-tooltip" id="bookmarkbtn-tooltip">Bookmark</span></button>
			<button class="white teal-text waves-effect z-depth-2 hoverable" id="group-btn"><i class="fa fa-group"></i><span class="sidemenu-tooltip" id="groupbtn-tooltip">Grup</span></button>
		</div>
		