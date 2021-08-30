<?php

class Conexion 

{

    // private static $conn;

    private function __construct()
    // impedimos instanciar la clase
    {
        
    }

    static function conectar()
    {

    $conn = new PDO ("mysql:host=localhost;dbname=puntos","root","");
    return $conn;

    }

 

}

?>