<?php
require_once("conexion.php");
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
		header("location:../index.php");
	}
	else{
		header("location:../login.php");

	}
}

/*Variables comunes, que existen en el script de php, que almacenan datos pero cuando el php se cierra o vamos a un html, o si recargamos la pagina, los datos se borran.

Variables session guardan los datos del usuario en el servidor de tal manera que cuando vuelve a la pagina , dichas variables siguen almacenando informacion.

session_start();
$_SESSION["idUsuario"] = 1;

Esta variable iniciada , existira por largos dias, dependiendo de la configuracion del servidor APACHE, podemos hacer que dure 2 semanas, 1 semana, 1 mes o eternamente.


*/

 ?>
