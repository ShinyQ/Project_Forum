
<html>
<head>
	<title>Test Forum</title>
	<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">

<style>
body:before{
  content: "";
  position: fixed;
  left: 0;
  right: 0;
  top: 0; 
  bottom: 0;
  z-index: -1;
  background-image: url('../img/telkom.jpg');
  width: 100%;
  height: 100%;
  margin-top:500px;
  margin-left:1230px;
  background-repeat:no-repeat;
  background-size: 100px 100px;
  opacity: 0.3;
}


.awal{
	width:99.25%;
	height:22%;
	background-color:#f7f7f7;
	position:absolute;
	left: 0;
    right: 0;
    top: 0; 
    bottom: 0;
	padding-left: 10px;
	border-bottom: 6px solid red;
}

.login {
	border-radius:10px;
	background-color: red;
	color:white;
	padding: 15px 15px 15px 15px;
	border:none;
	font-size:18px;
	font-weight:600;
	width:120px;
	text-decoration:none;
} 

.login:hover{
	border:3px solid red;
}

.form {
	margin-right:75px;
	margin-top:20px;
}

.sidebar{
	
	top:0;
	bottom:0;
	left:0;
	right:0;
	width:320px;
	height:auto;
	float:left;
	position:absolute;
}
.judul_sidebar{
	width:320px;
	height:50px;
	line-height:50px;
	font-size:25px;
	background:red;
	color:white;
	text-align:center;
}
.text_sidebar ul{

	list-style:none;
	padding:0;
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    border-bottom: 20px solid red;
    border-right: 4px solid red;
    border-left: 4px solid red;
	text-align : left;
	font-size:18px;
	padding:10px;
}
.text_sidebar ul li{
	width:100%;
	text-align:justify;
	margin:0 auto;
	padding-top:10px;
	padding-bottom:10px;
	color:white;
	border-bottom:1px white solid;
}
.text_sidebar ul li a{
	color:white;
	text-decoration:none;
}
.text_sidebar ul li a:hover{
    color:aqua; 
    text-decoration:none;
    
}

.navbar {
	margin-top:10%;
}

.navbar ul {
    list-style-type: none;
	position:absolute;
	left:0;
	right:0;
    overflow: hidden;
    background-color: #333;
    border-bottom: 5px solid red;
	margin-top: -4px;
	padding: 0;
}

.navbar li {
    float: left;
	

}

.navbar li a {
    display: block;
    font-family: fontawesome;
    font-size: 20px;
    color: white;
    text-align: center;
    padding: 20px 25px 20px 25px; 
    text-decoration: none;
}
.navbar li  span {
    display: block;
    font-family: fontawesome;
    font-size: 10px;
    color: white;
    text-align: center;
    padding: 16px ;
    text-decoration: none;


}

.navbar li span:hover {
    color: aqua;
}

.navbar li a:hover {
    background-color: red;
}

li a.active {
    background-color: red;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.sidebar{
	width:320px;
	height:auto;
	float:left;
	margin-top:216px;
}
.judul_sidebar{
	width:320px;
	height:50px;
	line-height:50px;
	font-size:25px;
	background:red;
	color:white;
	text-align:center;
}
.text_sidebar ul{

	list-style:none;
	padding:0;
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-bottom: 20px solid red;
    border-right: 4px solid red;
    border-left: 4px solid red;
	text-align : left;
	font-size:18px;
	padding:10px;
}
.text_sidebar ul li{
	width:100%;
	text-align:justify;
	margin:0 auto;
	padding-top:10px;
	padding-bottom:10px;
	color:white;
	border-bottom:1px white solid;
}
.text_sidebar ul li a{
	color:white;
	text-decoration:none;
}
.text_sidebar ul li a:hover{
    color:aqua; 
    text-decoration:none;
    
}

.konten{
	margin-top:20px;
	width:1000px;
	border-right:2px dashed red;
	border-left:2px dashed red;
	float:center;
	margin-left:12%;
	height: 0 auto;
	padding : 25px 0px 25px 0px;
	
}


.text_konten{
	width:95%;
	margin:0 auto;
	padding:10px 0 10px 0;
	}
</style>

</head>

<body> 
<div class="awal">
<br>
<strong>&nbsp;&nbsp;</strong>
<br>

<strong>
<div style="float:center,padding-bottom:10px;">
			
			
			<font size="6px" COLOR="#e52b2b">&nbsp;  </font>
			<i>
			<font color="#96b5e8" size="4px"><br>&nbsp;&nbsp;&nbsp;&nbsp;
			
			</font>
			</strong></i>

</div>
</div>

<div class="navbar">
<ul>
<li>  
<strong><span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Profil Anda</span></strong>
</li>
  <li><a class="active" href="Homepage.php">Halaman Awal</a></li>
  <li><a href="profil_siswa.php">Data Anda</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="prosses_hapus.php">Hapus Profil</a></li>
  <li><a href="penulis.php">Tentang Pembuat Web</a></li>
  <li><a href="">Tentang Website</a></li>
</ul>
</div>

</body>

</html>

