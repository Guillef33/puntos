<?php
    require_once("../php/logged.php");
    require '../inicio.php';
    $Productos = new Productos;
    $Productos = $Productos->listarProductos();

    include '../nav.php';
?>
    
    <main class="container">
            <h1>Modificar un producto</h1>

            <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

                <form action="agregarProducto.php" method="post">

                    <div class="form-group">
                        <label for="nombreProducto">Nombre del Producto:</label>
                        <input type="text" name="nombreProducto" 
                            id="nombreProducto" class="form-control mb-2"
                            required>
                    </div>
                    <!-- <div class="form-group">
                        <select name="categoriaProducto" id="categoriaProducto" 
                                class="form-control mb-2" required>
                            <option value="">Seleccione una categoria</option>
                <?php 
                        foreach ($productos as $producto) {
                ?>
                            <option value="">"<?= $producto['id']?>"<?= $producto['categoria']?></option>
                <?php
                        }
                ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="number" name="precio"
                                   class="form-control" placeholder="Ingrese el precio" required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">SKU: </div>
                            </div>
                            <input type="number" name="sku"
                                   class="form-control" placeholder="Ingrese el SKU del producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="banner" type="file" id="banner">
                                </div>
                            </div>
                            <!-- <input name="imagen"
                                class="form-control" placeholder="Suba una imagen del producto" required> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Stock: </div>
                            </div>
                            <input type="number" name="stock"
                                   class="form-control" placeholder="Ingrese el Stock disponible del producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Descripcion: </div>
                            </div>
                            <input type="text" name="descripcion"
                                   class="form-control" placeholder="Ingrese la descripcion corta del producto" required>
                        </div>
                    </div>

                    <button class="btn btn-dark mr-3">Modificar producto</button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary">
                            Volver a panel de productos
                        </a>

                </form>

            </div>


    </main>
<?php
    include '../footer.php';
?>