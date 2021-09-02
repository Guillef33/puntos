<?php 
require_once("inicio.php");
include_once("nav.php"); 
?>

<div class="container">
  <div class="row seccionLogin">
    <div class="d-flex align-items-center justify-content-center">
      <form method="post" id="formLogin">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
          <small id="errorEmail" class="mb-4 text-danger"></small>        
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Ingrese su password">
          <small id="errorPassword" class="mb-4 text-danger"></small>       
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Ingresar</button>
        <a type="text" class="btn btn-primary" href="register.php">Registrarse</a>
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