<?php 
    require_once("php/logged.php");
 ?>
<?php include_once("nav.php"); ?>


  <main>

<main>
  <section class="container">
    <div class="row align-items-center"">
      <div class="col-12">
        <div>
          <h2>Usuarios:</h2>
          <table class="table">
            <tr>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            </tr>";
          <?php
              include("php/conexion.php");
          ?>
          </table>
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

</body>
</html>
