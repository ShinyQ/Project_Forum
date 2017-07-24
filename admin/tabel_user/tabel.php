<?php

session_start();
if(!$_SESSION['Login_Admin']){
	header("location:../Login.php"); 
}

else {
	
?>
<?php
include "header.php";
?>
<title> Tabel User </title>
<!-- KONTEN WEB -->

<body>
<br>

<style>		  
	.body {
	transition: background-color .5s;
	}

.login {
	border-radius:10px;
	background-color: #4cce91;
	color:white;
	padding: 15px 15px 15px 15px;
	border:none;
	font-size:18px;
	font-weight:600;
	width:120px;
	text-decoration:none;
	
} 

.login:hover{
	border:3px solid #4cce91;
}

.form {
	margin-right:75px;
	margin-top:1px;
}

	
		/*  CODE TABLE */
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande";
			font-size: 12px;
			
		}
		
		
		
		
		
		
		

		h1 {
			
			text-align: center;
			font-size: 25px;
			color: white;
			
		}

		table td {
			transition: all .5s;
		}
		

	
		/* Table */
		.table {
			border-collapse: collapse;
			font-size: 12px;
		}

		.table th, 
		.table td {
			border: 1px solid #4cce91;
			padding: 7px 17px;
		}


		/* Table Header */
		.table thead th {
			background-color: #4cce91;
			color: white;
			border-color: #24e5a8 ;
			text-transform: uppercase;
			text-align: center;
		}

		/* Table Body */
		.table tbody td {
			color: #353535;
		}
		.table tbody td:first-child,
		.table tbody td:nth-child(4),
		.table tbody td:last-child {
			text-align: center;
		}
		

		.table tbody tr:nth-child(odd) td {
			background-color: #cdf7d8;
		}
		.table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

	
		a:link {
    text-decoration: none; }

		a:visited {
    text-decoration: none; }

		a:hover {
		text-decoration: underline; 
		}

	.atur {
	text-align:center;	
	}
	
	</style>



<?php 
echo @$pesan_ubah;
?>
<center>
<div class="table" id="table">
	<table class="table">
	<center>
	   <thead>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>JK</th>
				<th>Tgl Lahir</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Slogan</th>
				<th>Hobi</th>
				<th>Username</th>
			
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		</center>

	 <?php 
	include "db_connect.php";
	$sql_data_user=mysqli_query($dbc,"SELECT * FROM `users`");
	$no=0;
	while($data_User=mysqli_fetch_array($sql_data_user)){
	$no++;
	
	echo "<tr>
		<td>".$data_User['id_user']."</td>
		<td>".$data_User['Nama_Lengkap']."</td>
		<td>".$data_User['Jenis_Kelamin']."</td>
        <td>".$data_User['Tanggal_Lahir']."</td>
        <td>".$data_User['Email']."</td>
		<td>".$data_User['Alamat']."</td>
        <td>".$data_User['Slogan']."</td>
		<td>".$data_User['Hobi_User']."</td>
		<td>".$data_User['Username']."</td> 
		<td><a href='ubah.php?id_user=".$data_User['id_user']."'>Edit</a> ||
		<a href='hapus.php?id_user=".$data_User['id_user']."'"; ?>
		onclick="return confirm('Yakin Ingin Menghapus Data ?')"
		<?php echo ">Hapus</a></td></tr></td>"; }?>
	 </tbody>
	 </table>
	 </center>
	
	</body>
	
	


<?php
}
?>