<?php 
    require_once("php/logged.php");
 ?>
<?php include_once("nav.php"); ?>

  <main>
    <section class="container" id="grilla-catalogo">
    <div class="card-group">
      <div class="card">
        <img src="img/nike-air.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Zapatillas Nike Pro</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <h4 class="precioPuntos">5.600</h4>
          <button class="btn btn-primary">Canjear</button>
        </div>
      </div>
      <div class="card">
        <img src="img/nike-air.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Termo Stanley</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <h4 class="precioPuntos">7.600</h4>
          <button class="btn btn-primary">Canjear</button>
        </div>
      </div>
      <div class="card">
        <img src="img/nike-air.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $_SESSION["nombre"]; ?></h5>
          <p class="card-text"><?php echo $_SESSION["descripcion"]; ?></p>
          <h4 class="precioPuntos"><?php echo $_SESSION["precio"]; ?></h4>
          <button class="btn btn-primary">Canjear</button>
        </div>
      </div>
</div>
    </section>




  </main>

  <?php include_once("footer.php"); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

