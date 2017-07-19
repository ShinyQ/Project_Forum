<?php

session_start();
if(!$_SESSION['Login_Admin']){
	header("location:login.php"); 
}

else {
?>

   <?php
   include "header.php";
   ?>
 
 <?php
include "db_connect.php";
$Data_Admin=mysqli_query($dbc,"select * from profil_admin where 
id_admin='".$_SESSION['id_admin']."'");
$Data_Admin=mysqli_fetch_array($Data_Admin);

?>

<style>
.photo{
	background-color:#f7f7f7;
	height:60%;
	width:22%;
	font-weight:500;
	padding-bottom:8%;
}

.data {
	background-color:#f7f7f7;
	height:150%;
	width:75%;
	font-weight:500;
	color:black;
	padding : 25px;
}


input[type="text"],input[type="password"]{
    width: 75%;
    font-size: 1.2rem;
    font-family: "Open Sans";
    margin: 10px;
    border: none;
    padding: 10px;
    border-radius :4px;
	margin-left:30px;
	background-color:white;
  
  }
 input[type=date] {
	margin-top:10px;
	height : 30px;
	width: 74%;
	font-size: 18px;
	margin-bottom : 20px;
	background-color : #fff;
	padding-left: 5px;
	padding-right: 5px;
	outline: none;
	margin-left:30px;
  }
  
  textarea{
	width: 75%;
    font-size: 1.2rem;
    font-family: "Open Sans";
    margin-top: -20px ;
    border: none;
    padding: 10px;
    border-radius :4px;
	margin-left:130px;
  }
  
  .font {
	font-size:20px;
	color:black;
	font-family:FontAwesome;
	margin-left:10px;
	font-weight:400;
}

.font-enum {
	font-size:20px;
	color:black;
	font-family:FontAwesome;
		
}


 .button {
 display: block;
 border: 1px solid;
 border-color: #aaa #000 #000 #aaa;
 width: 30%;
 background: darkblue;
 padding: 10px;
 font-weight:900;
 font-size: 20px;
 color: white;
 cursor:pointer;
 margin: 25px 0px;
 
  }
 
  .button:hover {
 position: relative;
 border:2px solid ;
 top: 1px;
 left: 1px;
 border-color: #000 #aaa #aaa #000;
  }
  

</style>
<form action="ubah_data.php" method="post" enctype="multipart/form-data">	
		<center>

<div style="float:center;">		
<div style="float:left;" class="photo">
		
<br><br><br><br>
		
<h5>Halo Admin <?php echo $Data_Admin['Username']; ?> </h5>
 <?php 
		if($Data_Admin['Foto_Profil']==""){
		echo "<img src='assets/Foto/user.jpg' border='1' width='250px' height='260px'>
			  
			  ";
		}

		else {
		?>
	
<img src="Picture/<?php echo $Data_Admin['Foto_Profil'];?>" width="250px" height="260px" />
<a href="hapus_gambar.php?gambar=<?php echo $Data_Admin['Foto_Profil'];?>">&times;</a>
		<?php }?>
			  
			  <div style="margin-left:15%;">
			  <input type='file' name='Foto_Profil'>
			  </div>
			  			  
</center>

</div>

<div style="float:right;" class="data">
<center> <h4> Ubah Data </h4> </center>
 <!-- Form No induk -->
<div class="font">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;No. Id :
<input type="text" placeholder="Nomor Id" value="<?php echo $Data_Admin['id_admin'];?>"  name="id_admin"/>
</div>
<!-- Form No induk -->

<!-- Form Nama -->
<div class="font">&nbsp; Nama Lengkap :
<input type="text" placeholder="Nama Siswa" value="<?php echo $Data_Admin['Nama_Admin'];?>" name="Nama_Admin"/>

</div>

<!-- Form Email -->
<div class="font">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email :
<input type="text" placeholder="Email" value="<?php echo $Data_Admin['Email'];?>" name="Email"/>
<!-- Form Email -->

<!-- Form Username -->
<div class="font">&nbsp; &nbsp; &nbsp; &nbsp;Username :
<input type="text" placeholder="Buat Username Baru"  value="<?php echo $Data_Admin['Username'];?>" name="Username"/>
</div>
<!-- Form Username -->

<!-- Form Password -->
<div class="font">&nbsp; &nbsp; &nbsp; &nbsp;Password :
<input type="text" placeholder="Buat Password Baru"  value="<?php echo $Data_Admin['Password'];?>" name="Password" id="password" />
</div>
<!-- Form Password -->

<!-- Button Daftar -->
<div>
<tr>
<span>
<center><td><input type="submit" value="Ubah Data" class="button" name="Ubah_Data"></td></center>
</span>
</tr>
</div>
</div>		
		
		
		
		</div>
	
</form>		
<?php 
}
?>