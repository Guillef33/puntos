<?php 
	$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentencia = $conn->prepare("SELECT * FROM puntos WHERE idUsuarios = :idUsuarios");
	$sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
	$sentencia->execute();
	$resultado = $sentencia->fetch();

 
 ?>