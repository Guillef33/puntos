<?php include_once("nav.php"); ?>

<div class="container">
  <div class="row seccionLogin">
    <div class="col-6 d-flex align-items-center"">
      <form method="post" id="login" action="php/login.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
          <small id="emailHelp" class="form-text text-muted">No compartiremos tu informacion con otros.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ingrese su password">
        </div>
        <!-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Ingresar</button>
        <a type="text" class="btn btn-primary" href="registro.php">Registrarse</a>
      </form>
    </div>
    <div class="col-6 imageBackground">
      
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>