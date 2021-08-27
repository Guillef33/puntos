<?php 
	$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentencia = $conn->prepare("SELECT * FROM puntos INNER JOIN usuarios ON usuarios.idUsuarios = puntos.idUsuarios ORDER BY puntos DESC");
	$sentencia->execute();
	$puntajeUsuarios = $sentencia->fetchAll();
 ?>