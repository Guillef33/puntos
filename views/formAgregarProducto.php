<?php
    require_once("../php/logged.php");
    require '../inicio.php';
    $Productos = new Productos;
    $Productos = $Productos->listarProductos();

    include '../nav.php';
?>
    
    <main class="container">
            <h1>Alta de un nuevo producto</h1>

            <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

                <form action="agregarDestino.php" method="post">

                    <div class="form-group">
                    <label for="destNombre">Nombre del Producto:</label>
                    <input type="text" name="destNombre" 
                           id="destNombre" class="form-control"
                           required>
                    </div>

                    <div class="form-group">
                    <label for="regID">Categoria</label>
                    <select name="regID" id="regID" 
                            class="form-control" required>
                        <option value="">Seleccione una categoria</option>
            <?php 
                    foreach ($productos as $producto) {
            ?>
                        <option value="">"<?= $producto['id']?>"<?= $producto['categoria']?></option>
            <?php
                    }
            ?>
                    </select>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="number" name="destPrecio"
                                   class="form-control" placeholder="Ingrese el precio" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="number" name="destAsientos"
                                   class="form-control" placeholder="Ingrese cantidad de Asientos Totales" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="number" name="destDisponibles"
                                   class="form-control" placeholder="Ingrese cantidad de Asientos Disponibles" required>
                        </div>
                    </div>


                    <button class="btn btn-dark mr-3">Agregar producto</button>
                    <a href="adminDestinos.php" class="btn btn-outline-secondary">
                        Volver a panel de productos
                    </a>

                </form>

            </div>


    </main>
<?php
    include '../footer.php';
?>