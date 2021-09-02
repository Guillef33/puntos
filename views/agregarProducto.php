<?php
    require_once("../php/logged.php");
    require '../inicio.php';
    $Productos = new Productos;
    $chequeo = $Productos->agregarProducto();

    include '../nav.php';
?>

    <main class="container">

        <h1>Alta de un nuevo producto</h1>

        <?php 
            $mensaje = 'No se pudo agregar el producto';
            $css = 'danger';
        if($chequeo) {
            $mensaje = 'Producto ' .$Productos->getNombre().'  agregada correctamente';
            $css = 'success';
        }
        ?>
        <div class="alert alert<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light">Volver atras</a>
        </div>



    </main>

<?php
    include '../footer.php';
?>