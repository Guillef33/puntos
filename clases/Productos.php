<?php

class Productos  
{

    private $id;
    private $nombre;
    private $categoria;
    private $precio;
    private $sku;
    private $imagen;
    private $stock;
    private $descripcionCorta;

    static function conectarTienda()
    {

        $conn = new PDO ("mysql:host=localhost;dbname=premios","root","");
        return $conn;

    }

    static function listarProductos (){
        $link = Conexion::conectar();
        $sql = 'SELECT * FROM premios';
        $stmt = $link->prepare($sql);
        $stmt->execute();

        $productos = $stmt->fetchAll();
        return $productos;
    }
}


?>