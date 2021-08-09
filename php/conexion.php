<?php

//	$idProvincia = $_GET["idProvincia"];
	$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentencia = $conn->prepare("SELECT * FROM usuarios");
  //	$sentencia->bindParam(":idProvincia",$idProvincia,PDO::PARAM_INT);

	$sentencia->execute();

	$resultado = $sentencia->fetchAll();

	$tabla = "<h2>Mostrar datos</h2>";

  foreach ($resultado as $key => $tabla) {
		/*echo "<tr>";
    echo "<td>" . $tabla['nombre'] . "</td>";
    echo "<td>" . $tabla['email'] . "</td>";
    echo "<td>" . $tabla['password'] . "</td>";
    echo "</tr>";*/
	}
  echo "</table>";

?>
