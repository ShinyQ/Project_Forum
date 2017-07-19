<?php
 
	$Username = @$_POST['Username'];
	$Password = @$_POST['Password'];
		
		include "db_connect.php";
		$cek = mysqli_query ($dbc,"select * from profil_admin where Username = '$Username' and Password = '$Password'") 
		or die("Failed to query database " .mysqli_error($dbc));
		
		
		if(mysqli_num_rows($cek)>0){
		 session_start();
		 $Cek_Data =  mysqli_fetch_array($cek);
		 $_SESSION['Username']=$Cek_Data['Username'];
		 $_SESSION['Username']=$_POST['Username'];
		 $_SESSION['Password']=$_POST['Password'];
		 $_SESSION['Nama_Admin'] = $_POST['Nama_Admin'];
	     $_SESSION['id_admin']=$Cek_Data['id_admin'];
		
		 
		 $_SESSION['Login_Admin'] = true;
		 header('Location:index.php');
		}
	
	else {
		include "Login.php";	
	}
	
	
?>