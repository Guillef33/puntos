<?php 
$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
$sentencia = $conn->prepare("SELECT * FROM puntos WHERE idUsuarios = :idUsuarios");
$sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
if ($sentencia->execute()) {
	$resultado = $sentencia->fetch();
	if ($resultado == false) {
		/*No esta calculado el puntaje*/
		$sentencia = $conn->prepare("SELECT SUM(cursos.puntos) as puntos FROM cursadas INNER JOIN cursos ON cursos.idCursos = cursadas.idCursos WHERE cursadas.idUsuarios = :idUsuarios AND cursadas.status = 1");
		$sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
		$sentencia->execute();
		$resultado = $sentencia->fetch();

		$sentencia1 = $conn->prepare("INSERT INTO puntos (idUsuarios,puntos) VALUES(:idUsuarios,:puntos)");
		$sentencia1->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
		$sentencia1->bindParam(":puntos",$resultado['puntos'],PDO::PARAM_INT);
		$sentencia1->execute();

	}
	else{
		/*Esta calculado el puntaje*/

	}
}else{

}
?>
