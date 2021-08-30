<?php

class Productos  {


    static function conectar()
    {

    $conn = new PDO ("mysql:host=localhost;dbname=premios","root","");
    return $conn;

    }

}


?>