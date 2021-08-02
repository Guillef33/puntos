<?php

//	$idProvincia = $_GET["idProvincia"];
	$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentenciaPuntos = $conn->prepare("SELECT * FROM puntos");
  //	$sentencia->bindParam(":idProvincia",$idProvincia,PDO::PARAM_INT);

	$sentenciaPuntos->execute();

	$resultado = $sentenciaPuntos->fetchAll();

	$tabla = "<h2>Mostrar tabla de puntos</h2>";

  foreach ($resultado as $key => $tabla) {
		echo "<tr>";
    echo "<td>" . $tabla['nombre'] . "</td>";
    echo "<td>" . $tabla['categoria'] . "</td>";
    echo "<td>" . $tabla['puntos'] . "</td>";
    echo "<td>" . $tabla['descripcion'] . "</td>";
    echo "</tr>";
	}
  echo "</table>";

?>
<!--

Que usuario / 5

UPDATE puntosUsuarios WHERE UserId = 5 SET userPuntos = PuntosUsuario + 300 puntos -->
