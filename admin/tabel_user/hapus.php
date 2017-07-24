 <?php
 $id_user=$_GET['id_user'];
 include "db_connect.php";
 $hapus=mysqli_query($dbc,"delete from users where id_user='$id_user'");
 if($hapus){
	 header('location:tabel.php');
 }
 ?>