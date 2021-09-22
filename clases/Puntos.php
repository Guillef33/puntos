<?php
class Puntos extends Conexion
{
    public static function traerPuntajes () {
        //$conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
        $sentencia = Conexion::conectar()->prepare("SELECT * FROM puntos WHERE idUsuarios = :idUsuarios");
        $sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        return $resultado; 
    }

    public static function traerPuntajesUsuario () {


    $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentencia = $conn->prepare("SELECT * FROM puntos INNER JOIN usuarios ON usuarios.idUsuarios = puntos.idUsuarios ORDER BY puntos DESC");
	$sentencia->execute();
	$puntajesUsuarios = $sentencia->fetchAll();
        return $puntajesUsuarios;
    }


    public function puntajeUsuarios () 
    {
    //    $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
        $sentencia = Conexion::conectar()->prepare("SELECT * FROM puntos WHERE idUsuarios = :idUsuarios");
        $sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
        if ($sentencia->execute()) {
            $resultado = $sentencia->fetch();
            if ($resultado == false) {
                /*No esta calculado el puntaje*/
                $sentencia = Conexion::conectar()->prepare("SELECT SUM(cursos.puntos) as puntos FROM cursadas INNER JOIN cursos ON cursos.idCursos = cursadas.idCursos WHERE cursadas.idUsuarios = :idUsuarios AND cursadas.status = 1");
                $sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $sentencia1 = Conexion::conectar()->prepare("INSERT INTO puntos (idUsuarios,puntos) VALUES(:idUsuarios,:puntos)");
                $sentencia1->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
                $sentencia1->bindParam(":puntos",$resultado['puntos'],PDO::PARAM_INT);
                $sentencia1->execute();

            }
            else{
                /*Esta calculado el puntaje*/

            }
        }else{

        }
    }


    // Probando
    public function sumarPuntosAUsuario () {

        $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
        $sentencia = Conexion::conectar()->prepare("INSERT INTO  puntosusuarios (id, usuario, cursos, puntos) VALUES ($id, $usuario, $cursos, $puntos) INNER JOIN usuarios ON puntosusuarios.idUsuarios = usuarios.idUsuarios" );
        $sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
        $sentencia->execute();
        $puntajeUsuarios = $sentencia->fetchAll();
    
        }

    // Probando
    public static function restarPuntosAUsuario () {

        $sentencia = Conexion::conectar()->prepare("UPDATE puntos SET  puntos = puntos - :valorProducto WHERE idUsuarios = :idUsuarios" );
        $sentencia->bindParam(":idUsuarios",$array['idUsuarios'],PDO::PARAM_INT);
        $sentencia->bindParam(":valorProducto",$array['valorProducto'],PDO::PARAM_INT);

        $sentencia->execute();
    
        }

}


?>