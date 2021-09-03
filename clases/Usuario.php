<?php class Usuario extends Conexion
{
    public static function register(){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $rol = $_POST["rol"];


        $error = "";

        if(strlen($nombre) < 5 OR strlen($nombre) > 20){
            $error .= "_nombre";
        }
        if(strlen($email) < 7 OR strlen($email) > 35){
            $error .= "_email";
        }
        /*if (preg_match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$",$password) == false) {
            $error .= "_password";
        }*/

        if ($error == "") {
            $sql = Conexion::conectar()->prepare("INSERT INTO usuarios (nombre,email,password,rol) VALUES(:nombre,:email,:password,:rol)");
            $sql->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $sql->bindParam(":email",$email,PDO::PARAM_STR);
            $sql->bindParam(":password",$password,PDO::PARAM_STR);
            $sql->bindParam(":rol",$rol,PDO::PARAM_STR);

            if ($sql->execute()) {
                header("location:index.php");   
            }
        }
        else{
            header("location:register.php?error=".$error);
        }
    }
    public static function logIn()
    {
        $rol = $_POST["rol"];
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
                header("location:views/welcome.php");
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