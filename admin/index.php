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
		<div class="col l9 z-depth-1" id="content">
			
			<font size="5%" color="#1b4b8e">
			<strong> Hi , Admin <?php echo $Data_Admin['Username']; ?> !!! </strong>
			</font>
			
			<hr width="100%" color="#cbcfd6">
			<br>
			<div class="Foto" align="center">
			<center>
			 <?php 
		if($Data_Admin['Foto_Profil']==""){
		echo "<img src='assets/Foto/user.jpg' border='1' width='185px' height='210px'>
			  
			  ";
		}

		else {
		?>
	
<img src="Picture/<?php echo $Data_Admin['Foto_Profil'];?>" width="200px" height="180px" />

		<?php }?><br><br>
			</center>
			<strong>
			<center>
			<hr width="100%" color="#cbcfd6">
			</center>
			&nbsp;&nbsp;&nbsp;ID : <?php echo $Data_Admin['id_admin'];?>
			&nbsp;<hr width="100%" color="#cbcfd6">
			&nbsp;&nbsp;&nbsp;<?php echo $Data_Admin['Nama_Admin'];?><br>
			&nbsp;&nbsp;&nbsp;[<?php echo $Data_Admin['Username'];?>]<br>
			<center>
			<hr width="100%" color="#cbcfd6">
			<a href="edit.php">Edit Profil</a> ||
			<a href="logout.php">Logout</a>
			</center>
			
			
        	</strong>
			</div>
			
			
			
		</div>

	</div>
	
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<script src="assets/js/default.js"></script>
</body>

</html>

<?php
}
?>