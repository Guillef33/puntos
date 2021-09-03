<?php 
require_once("inicio.php");
include_once("nav.php"); 
?>

<div class="container">
  <div class="row seccionLogin">
    <div class="d-flex align-items-center justify-content-center">
      <form method="post" id="register">
        <div class="form-group">
          <label for="inputNombre">Nombre</label>
          <input type="email" class="form-control" name="nombre" id="inputNombre" aria-describedby="nombreHelp" placeholder="Ingrese su nombre">
          <small id="errorName" class="mb-4 text-danger"></small>        
        </div>
        <div class="form-group">
          <label for="inputEmail">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
          <small id="errorEmail" class="mb-4 text-danger"></small>        
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Ingrese su password">
          <small id="errorPassword" class="mb-4 text-danger"></small>       
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Registrarme</button>
        <a type="text" class="btn btn-primary" href="login.php">Volver a Login</a>
      </form>
      <?php 
        if(isset($_POST["submit"])){
          $a = Usuario::logIn();
        }
      ?>
    </div>
  </div>
</div>

<?php include_once("footer.php"); ?>



</body>
</html>