<?php 
	$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentencia = $conn->prepare("SELECT * FROM puntos WHERE idUsuarios = :idUsuarios");
	$sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
	$sentencia->execute();
	$resultado = $sentencia->fetch();

	$tabla = "<h2>Mostrar datos</h2>";

	foreach ($resultado as $key => $tabla) {
		  echo "<tr>";
	  echo "<td>" . $tabla['idPuntos'] . "</td>";
	  echo "<td>" . $tabla['idUsuarios'] . "</td>";
	  echo "<td>" . $tabla['puntos'] . "</td>";
	  echo "</tr>";   
	  }
	echo "</table>";
  
 ?>