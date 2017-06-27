<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location: login.php ");
}
else{
	include "header.php";
?>
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
		
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<script src="assets/js/default.js"></script>
</body>

</html><?php }?>