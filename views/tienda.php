<?php 
    require_once ('../inicio.php');
    require_once("../php/logged.php");  
    include_once("../nav.php"); 
    $productos = Productos::listarProductos();
    $a = new Puntos;
    $a->puntajeUsuarios();
    $puntosUsuarios = $a["puntos"];
?>

  <main>
    <section class="container" id="grilla-catalogo">
        
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
            if ($producto["precio"] <   $puntosUsuarios ): ?>
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
    </section>
  </main>

  <?php include_once("../footer.php"); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>