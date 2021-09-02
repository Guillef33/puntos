<?php 
	session_start();
	unset($_SESSION["idUsuarios"]);
	unset($_SESSION["nombre"]);
	unset($_SESSION["email"]);
	header("location:../index.php");
	
 ?>