<?php
session_start();
unset($_SESSION['sess_id_admin']);
session_destroy();
header("location:login.php");
?>