<?php 

class Usuario
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
    {ob_start();
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $sql = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
        $sql->bindParam(":email",$email,PDO::PARAM_STR);
        $sql->bindParam(":password",$password,PDO::PARAM_STR);
        
        if ($sql->execute()) {
            /*
            
            Sin fetch
            $sql = "NOMBRE:ema password:1234";

            Con fetch
            $resultado = ["nombre"=>"ema","password"=>"1234"];
            $resultado["nombre"];

            */
            $resultado = $sql->fetch();
            /*Si es true trajo una fila y tiene un array con los datos del usuario, osea se logeo bien puso email y password correcto.*/
            if ($resultado == true) {
                
                /*Para empezar a utilizar las variables de session*/
                session_start();
                /*Empezamos a guardar los datos del usuario logeado para poder manejarlos en la pagina , preguntar si se logeo. traer el nombre y mostrarlo en la vista, preguntar por su rol , etc.*/
                $_SESSION["idUsuarios"]= $resultado["idUsuarios"];
                $_SESSION["nombre"] = $resultado["nombre"];
                $_SESSION["email"] = $resultado["email"];
                // $_SESSION["rol"] = $resultado["rol"];
                header("location:views/welcome.php");
                
            }
            /*Si pasa por false, significa que no trajo ninguna fila, los datos no coinciden.*/
            else{
         //       header("location:login.php");
            }
        }
    ob_end_flush();}
    public function logOut () 
    {
        session_start();
        unset($_SESSION["idUsuarios"]);
        unset($_SESSION["nombre"]);
        unset($_SESSION["email"]);
        unset($_SESSION["rol"]);
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