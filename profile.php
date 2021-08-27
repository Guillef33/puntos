<?php 
    require_once("php/logged.php");
 ?>
<?php include_once("nav.php"); ?>

<?php 
    require_once("php/puntajeUsuario.php");

//  var_dump($sentencia1);
//  var_dump($resultado);
//  var_dump($resultado['puntos']);
 ?>
  <main>
    <section>
      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3">
                  <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                  <span class="font-weight-bold"><?php echo $_SESSION["nombre"]; ?></span>
                  <span class="text-black-50"><?php echo $_SESSION["email"]; ?></span>
                  <span>Puntos Conseguidos</span>
                  <!-- <?php 
                  require_once("php/traerPuntajes.php");
                    ?> -->

                  <p style="font-weight: bold;"><?php echo $resultado["puntos"] ?></p>
                  <span></span> <!-- agregar aca los puntos de usuario -->
                  <a href="points.php" class="btn btn-primary">Canjear Puntos</a>
                  <span>Level 1</span>
                  <a href="points.php" class="btn btn-primary">Puntos Historia</a>

                </div>
            </div>
            <div class="col-md-9 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Editar tu Perfil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" placeholder="Editar su nombre" value=""></div>
                        <div class="col-md-6"><label class="labels">Apellido</label><input type="text" class="form-control" value="" placeholder="Editar su apellido"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Telefono</label><input type="text" class="form-control" placeholder="Ingrese su telefono" value=""></div>
                        <div class="col-md-12"><label class="labels">Direccion</label><input type="text" class="form-control" placeholder="Direccion" value=""></div>
                        <div class="col-md-6"><label class="labels">Codigo Postal</label><input type="text" class="form-control" placeholder="Ingrese su codigo postal" value=""></div>
                        <div class="col-md-6"><label class="labels">Provincia</label><input type="text" class="form-control" placeholder="Ingrese su provincia" value=""></div>
                        <div class="col-md-12"><label class="labels">Ciudad</label><input type="text" class="form-control" placeholder="Ingrese su ciudad" value=""></div>
                        <div class="col-md-12"><label class="labels">Puesto</label><input type="text" class="form-control" placeholder="Ingrese su puesto" value=""></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
      </div>
    </section>





  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
