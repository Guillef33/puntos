<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Loyalty Program</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php include_once("nav.php"); ?>

  <main>
    <!-- <section class="container">
      <div class="row align-items-center"">
        <div class="col-12">
          <div>
            <h2>Tabla de puntos y categorias:</h2>
            <table class="table">
              <tr>
              <th>name</th>
              <th>email</th>
              <th>password</th>
              <th>descripcion</th>
              </tr>";
            <//?php
                include("php/puntosBase.php");
            ?>
            </table>
          </div>
        </div>
      </div>
    </section> -->

    <section>
      <div class="container">
      <form action="php/puntosBase.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" id="inputNombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group col-md-6">
            <label for="inputApellido">Apellido</label>
            <input type="text" class="form-control" id="inputApellido" placeholder="Ingrese su apellido">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmpresa">Empresa</label>
          <input type="text" class="form-control" id="inputEmpresa" placeholder="Ingrese su empresa">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCurso">Curso terminado</label>
            <select id="inputCurso" class="form-control">
              <option selected>Eliga el curso que termino</option>
              <option value="1">Curso 1</option>
              <option value="2">Curso 2</option>
              <option value="3">Curso 3</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Enviar curso</button>
      </form>
      </div>
    </section>

  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
