<?php 
  include_once("../nav.php"); 
  require("../index.php");

?>



<main>
  <section class="container">
  <h2>Ranking de los mejores alumnos</h2>
    <div class="row align-items-center">
      <div class="col-12">
        <div>
          <table class="table">
            <tr>
            <th>Nombre</th>
            <th>Puntos Conseguidos</th>
            </tr> 
        <?php 
          foreach ($puntajeUsuarios as $key => $tabla) {
              echo "<tr>";
            echo "<td>" . $tabla['nombre'] . "</td>";
            echo "<td>" . $tabla['puntos'] . "</td>";
            echo "</tr>";   
            }
          echo "</table>";
          ?>

        </div>
      </div>
    </div>
  </section>

  <section>
    <canvas id="chart-data-mdb-labels-example"></canvas>
  </section>


</main>




  <script src="app.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <?php include_once("../footer.php"); ?>

</body>
</html>
