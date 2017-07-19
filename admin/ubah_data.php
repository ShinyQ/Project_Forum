<?php
	
	$id_admin = $_POST['id_admin'];
	$Password = $_POST['Password'];
	
	$Username = $_POST['Username'];
	$Nama_Admin = $_POST['Nama_Admin'];
	$Email = $_POST['Email'];
	
	$Nama_Foto = @$_FILES['Foto_Profil']['name'];
	$File_Foto = @$_FILES['Foto_Profil']['tmp_name'];
	
	
	include "db_connect.php";
	session_start();

	if(!empty($Nama_Foto)){
	$sql_foto= "Foto_Profil = '$Nama_Foto' ,"; }
	
	else {
	$sql_foto="";}
	
if(isset($_POST['Ubah_Data'])){
$ubah=mysqli_query($dbc,"UPDATE profil_admin 
SET 
`id_admin`='$id_admin', 
`Nama_Admin`='$Nama_Admin',
`Email`='$Email',  
`Username`='$Username',
	`Password`='".$_POST['Password']."' where id_admin='$_SESSION[id_admin]'"); 

if($ubah){
		$Upload = move_uploaded_file($File_Foto,'Picture/'.$Nama_Foto);
		if(!$Upload){
			echo "<script> alert ('Sukses Update Gagal Mengganti Foto'); location.href='edit.php';</script>"; }
		else{
			echo "<script> alert ('Sukses Update dan Mengganti Foto'); location.href='edit.php';</script>";}
	   
	 
	}
	
			 else{
		   echo "<script> alert ('GAGAL UPDATE'); location.href='edit.php';</script>"; 
		   }

}
?>