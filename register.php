<?php ob_start();
require_once("inicio.php");
include_once("nav.php"); 
?>

<?php 
  if (isset($_GET["error"])) {
    $error = explode("_", $_GET['error']);
  }
 ?>

<div class="container">
  <div class="row seccionLogin">
    <div class="d-flex align-items-center justify-content-center">
      <form method="post" id="register">
        <div class="form-group">
          <label for="inputNombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="inputNombre" aria-describedby="nombreHelp" placeholder="Ingrese su nombre">
          <?php if (isset($error) AND in_array("nombre", $error)): ?>
            <small id="errorName" class="mb-4 text-danger"> Debe ingresar un nombre entre 7 y 20 caracteres</small>        
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="inputEmail">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
          <?php if (isset($error) AND in_array("email", $error)): ?>
          <small id="errorEmail" class="mb-4 text-danger"> Debe ingresar un nombre entre 5 y 30 caracteres</small>      
          <?php endif ?>    
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Ingrese su password">
          <?php if (isset($error) AND in_array("password", $error)): ?>
          <small id="errorPassword" class="mb-4 text-danger">La password debe tener al menos 1 mayuscula, 1 minuscula , numeros y debe ser mayor a 8 caracteres</small>            
          <?php endif ?>  
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Registrarme</button>
        <a type="text" class="btn btn-primary" href="login.php">Volver a Login</a>
        <input type="hidden" name="rol" value="user">
      </form>
      <?php 
        if(isset($_POST["submit"])){
          $a = Usuario::register();
        }
      ?>
    </div>
  </div>
</div>

<?php include_once("footer.php"); ?>



</body>
</html>
<?php ob_end_flush(); ?>