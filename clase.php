<?php 

// Esta es el planteamiento. pensa en 3 facetas paso a paso la parte azul es como una ayuda para reflexionar y la parte negra es lo que se espera 

// De esa manera podrias realizar el codigo paso a paso y guiandote con esto tambien podrias rellenar esa informacion en azul que pide Que variables, que tablas, que mostrar etc

// Limitar compra de producto de acuerdo a los puntos que tenga el usuario ?>
<div class="card-group">
    <?php foreach ($productos as $key => $producto): ?>
    <div class="card">
        <img src="../img/nike-air.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text"><?php echo $producto["categoria"] ?></p>
        <h5 class="card-title"><?php echo $producto["nombre"] ?></h5>
        <p class="card-text"><?php echo $producto["descripcionCorta"] ?></p>
        <p class="card-text"><?php echo $producto["sku"] ?></p>
        <?php
        if ($producto["precio"] <  $puntosUsuarios ): ?>
            <h4 class="precioPuntos"><?php echo '$' . $producto["precio"] ?></h4>
            <a href="producto.php?productoId=<?php echo $producto["id"] ?>" class="btn btn-primary">Canjear</a>
        <?php else: ?>
            <h4 class="precioPuntos">Puntos insuficientes</h4>
            <a href="" class="btn btn-secondary disabled">Canjear</a>
        <?php endif; ?>
        </div>
    </div>
    <?php endforeach ?>
</div>

// Sentencia SQL para ver que 

<?php 

$sql = "SELECT
  premios.id,  
  premios.nombre,
  puntos.puntos
FROM premios
JOIN usuarios
  ON usuarios.idUsuarios = puntos.idUsuarios
JOIN puntos
    WHERE puntos.puntos > premios.precio"

    //Saber que usuario que compro
    // Que compro
    // Restar puntos de acuerdo al precio
<div class=""></div>
[historial de la compra]
El usuario 7 compro el premios 9
Tabla pedidos, tendra 1 fila por cada compra de x usuario.

INSERT INTO nombre_tabla (columna1,columna2) VALUES(valor1,valor2)

INSERT INTO pedidos (idUsuario,IdPremio,fecha) VALUES($_SESSION['IdUsuario'], )



Que columna guarda pedidos (idPedido, idUsuario, IdPremio,fecha)



[actualizacion de puntajes del usuario resultado de la compra]
  Comprar Productos
            Debemos crear la tabla pedidos?
  // 
  public function comprarProducto(){
        $_POST["idProducto"];
        $_POST["valorProducto"];
        $_SESSION["idUsuarios"];

        $agregarProducto = 'INSERT INTO pedidos VALUES ('$productId')';
    }
    'UPDATE nombre_tabla SET nombre_columna1 = "nuevo valor",nombre_columna2 = "nuevo valor" WHERE id = 1'
     = 1 Porque en una sentencia update generalmente cambiamos datos de a 1 fila.
    'UPDATE puntos SET puntos = puntos - :precio_premio WHERE idUsuarios = :idUsuarios'
    Si toco en canjear producto "zapatillas" :precio_premio = 700 y :idUsuarios = el usuario actual (11)
    
  

    ?>


