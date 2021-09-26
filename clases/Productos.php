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


    public function agregarProducto( ){

        $nombreProducto = $_POST['nombreProducto']; //Encapsulamos el objeto, vamos a tener que agregar varios parametros post en destinos
        $precio = $_POST['precio'];
        $sku = $_POST['sku'];
        $stock = $_POST['stock'];
        $descripcion = $_POST['descripcion'];

        $link = Conexion::conectar();
        $sql = "INSERT INTO premios (nombre,precio,sku,stock,descripcionCorta,categoria) VALUES (:nombreProducto,:precio,:sku,:stock,:descripcion,'Camping')"; //parametro con nombre     
        $stmt = $link->prepare($sql); // https://www.php.net/manual/es/pdo.prepare.php    
        $stmt->bindParam(':nombreProducto', $nombreProducto, PDO::PARAM_STR); // parametro con nombre, la variables, el parametrostr
        $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
        $stmt->bindParam(':sku', $sku, PDO::PARAM_INT);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);

        if ($stmt ->execute()) {
            $this->setID($link->lastInsertId());/*lastInsertId Es un metodo de pdo para traer la llave primaria de la ultima INSERT INTO de la linea 42.*/
            $this->setNombre($nombreProducto); // registramos un atributo
            $this->setPrecio($precio); // registramos un atributo
            $this->setSku($sku); // registramos un atributo
            $this->setStock($stock); // registramos un atributo
            $this->setDescripcionCorta($descripcion); // registramos un atributo

            return $this; //retorna el objeto
        } 
        return false;

 
    }
    public function comprarProducto(){
        $_POST["idProducto"];
        $_POST["valorProducto"];
        $_SESSION["idUsuarios"];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of sku
     */ 
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the value of sku
     *
     * @return  self
     */ 
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of descripcionCorta
     */ 
    public function getDescripcionCorta()
    {
        return $this->descripcionCorta;
    }

    /**
     * Set the value of descripcionCorta
     *
     * @return  self
     */ 
    public function setDescripcionCorta($descripcionCorta)
    {
        $this->descripcionCorta = $descripcionCorta;

        return $this;
    }
}


?>