<?php
/*require_once("conexion.php");
$email = $_POST["email"];
$password = $_POST["password"];

$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");

$sql = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
$sql->bindParam(":email",$email,PDO::PARAM_STR);
$sql->bindParam(":password",$password,PDO::PARAM_STR);

if ($sql->execute()) {
	$resultado = $sql->fetch();
	if ($resultado == true) {
		session_start();
		$_SESSION["idUsuarios"]= $resultado["idUsuarios"];
		$_SESSION["nombre"] = $resultado["nombre"];
		$_SESSION["email"] = $resultado["email"];
		header("location:../views/welcome.php"); // Revisar
	}
	else{
		header("location:../login.php");

	}
}*/

?>
