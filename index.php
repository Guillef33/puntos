<?php 
  require_once ('clases/Conexion.php');  
  require_once ('clases/Puntos.php');
  require_once ('clases/Usuario.php');
  include_once("nav.php");
?>



  <main>
    <section class="container">
      <div class="row align-items-center">
        <div class="col-6">
          <h1>Premia a tus empleados</h1>
          <p>Genera fidelizacion y mejora el clima laboral de tu empresa.
            El programa TusPuntos es muy sencillo.
            Registrate, carga tus datos y empeza a ganar.
          </p>
            <a class="btn btn-primary" href="php/login.php"> Log In</a>
        </div>
        <div class="col-6">
          <img src="./img/loyalty.svg" alt="" class="img-thumbnail">
        </div>
      </div>
    </section>




  </main>

  <?php include_once("footer.php"); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

