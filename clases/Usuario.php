<?php

class Usuario extends Conexion

{
    public static function logIn()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        
        $sql = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
        $sql->bindParam(":email",$email,PDO::PARAM_STR);
        $sql->bindParam(":password",$password,PDO::PARAM_STR);
        
        if ($sql->execute()) {
            $resultado = $sql->fetch();
            if ($resultado == true) {
                session_start();
                $_SESSION["idUsuarios"]= $resultado["idUsuarios"];
                $_SESSION["nombre"] = $resultado["nombre"];
                $_SESSION["email"] = $resultado["email"];
                header("location:welcome.php");
            }
            else{
                header("location:login.php");
        
            }
        }

    }

    public function logOut () 
    {
        session_start();
        unset($_SESSION["idUsuarios"]);
        unset($_SESSION["nombre"]);
        unset($_SESSION["email"]);
        header("location:../index.php");
    }

    public function logged () 
    {
        session_start();
            if (!isset($_SESSION['idUsuarios'])) {
	        header("location:index.php");
            }
    }

    public function seleccionarUsuarios () 
    {  
        $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
        return $conn;

        $sqlUsuarios = "SELECT * FROM usuarios";

        $sentencia = $conn->prepare($sqlUsuarios);

        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

    }


}

?>