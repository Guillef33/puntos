<?php

class Puntos extends Conexion 

{


    public function traerPuntajes () {
        $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
        $sentencia = $conn->prepare("SELECT * FROM puntos WHERE idUsuarios = :idUsuarios");
        $sentencia->bindParam(":idUsuarios",$_SESSION['idUsuarios'],PDO::PARAM_INT);
        $sentencia->execute();
        $resultado = $sentencia->fetch();    
    }

    public function traerPuntajesUsuario () {


    $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
	$sentencia = $conn->prepare("SELECT * FROM puntos INNER JOIN usuarios ON usuarios.idUsuarios = puntos.idUsuarios ORDER BY puntos DESC");
	$sentencia->execute();
	$puntajeUsuarios = $sentencia->fetchAll();

    }

    // Probando
    public function sumarPuntosAUsuario () {

        $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
        $sentencia = $conn->prepare("INSERT INTO  puntos INNER JOIN puntosUsuario ON puntos.idUsuarios = puntosUsuario.idUsuarios");
        $sentencia->execute();
        $puntajeUsuarios = $sentencia->fetchAll();
    
        }

}


?>