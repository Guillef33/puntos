<?php
    require_once("../php/logged.php");
    require '../inicio.php';
    $Productos = new Productos;
    $Productos = $Productos->listarProductos();

    include '../nav.php';
?>

    <main class="container">
        <h1>Panel de administración de destinos</h1>

        <table class="table table-borderless table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>SKU</th>
                <th>Imagen</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th colspan="2">
                    <a href="formAgregarProducto.php" class="btn btn-outline-secondary">
                        Agregar <i class="far fa-plus-square ml-1"></i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        
        <?php 
          foreach ($Productos as $Producto){
        ?>

            <tr>
                <td><?= $Producto['id'] ?></td>
                <td><?= $Producto['nombre'] ?></td>
                <td><?= $Producto['categoria'] ?></td>
                <td><?= $Producto['precio'] ?></td>
                <td><?= $Producto['sku'] ?></td>
                <td><?= $Producto['imagen'] ?></td>
                <td><?= $Producto['stock'] ?></td>
                <td><?= $Producto['descripcionCorta'] ?></td>

                <td>
                    <a href="formModificarProducto.php?productoId=<?= $Producto['id'] ?>" class="btn btn-outline-secondary">
                        Modificar <i class="far fa-edit ml-1"></i>
                    </a>
                </td>
                <td>
                    <a href="formModificarProducto.php?productoId=<?= $Producto['id'] ?>" class="btn btn-outline-secondary">
                        Eliminar <i class="far fa-minus-square ml-1"></i>
                    </a>
                </td>
            </tr>
        <?php
            }
        ?>

            </tbody>
        </table>

        </main>

<?php
    include '../footer.php';
?>