<?php 
$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
$sentencia = $conn->prepare("SELECT * FROM puntos WHERE idUsuario = :idUsuario");
$sentencia->bindParam(":idUsuario",$_SESSION['idUsuario'],PDO::PARAM_INT);
if ($sentencia->execute()) {
	$resultado = $sentencia->fetch();
	if ($resultado == false) {
		/*No esta calculado el puntaje*/
		$sentencia = $conn->prepare("SELECT * FROM puntos WHERE idUsuario = :idUsuario");
		$sentencia->bindParam(":idUsuario",$_SESSION['idUsuario'],PDO::PARAM_INT);
		
	}
	else{
		/*Esta calculado el puntaje*/

	}
}else{

}
?>
