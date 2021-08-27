<?php 
    require_once("php/logged.php");
 ?>

<?php include_once("nav.php"); ?>

  <main>
    <section class="container">
      <div class="row align-items-center"">
        <div class="col-6">
          <h1>Bienvenido, <?php echo $_SESSION["nombre"]; ?></h1>
          <p>Genera fidelizacion y mejora el clima laboral de tu empresa.
            El programa TusPuntos es muy sencillo.
            Registrate, carga tus datos y empeza a ganar.
          </p>
        <!-- <?php 
          require_once("php/traerPuntajes.php");
        ?> -->
          <p>Hoy tus puntos son:<span style="font-weight: 700;"><?php echo $resultado["puntos"] ?> </span></p>

        </div>
        <div class="col-6">
          <img src="./img/loyalty.svg" alt="" class="img-thumbnail">
        </div>
      </div>
    </section>

    <!-- <section class="container">
      <div class="row m-5">
        <div class="d-flex justify-content-center">
          <h2>Earn it</h2>
        </div>
      </div>
      <div class="row" >
        <div class="col-3 text-center">
          <img src="img/gbp_x100.jpg" alt="">
          <h3>5 point</h3>
          <p>Spend £1</p>
          <p>Online</p>
        </div>
        <div class="col-3 text-center">
          <img src="img/facebook_x100.jpg" alt="">
          <h3>5 point</h3>
          <p>Spend £1</p>
          <p>Online</p>
        </div>
        <div class="col-3 text-center">
          <img src="img/insta_x100.jpg" alt="">
          <h3>5 point</h3>
          <p>Spend £1</p>
          <p>Online</p>
        </div>
        <div class="col-3 text-center">
          <img src="img/twitter_x100.jpg" alt="">
          <h3>5 point</h3>
          <p>Spend £1</p>
          <p>Online</p>
        </div>
      </div>

    </section> -->



  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include_once("footer.php"); ?>

</body>
</html>
