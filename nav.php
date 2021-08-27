

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programa de Puntos Para Empresas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <?php require_once("php/logged.php"); ?>

    <?php if (isset($_SESSION['idUsuarios'])): ?>
      <a class="navbar-brand" href="welcome.php">TusPuntos</a>
      <?php else: ?>
      <a class="navbar-brand" href="index.php">TusPuntos</a>
    <?php endif; ?>

    <?php require_once("php/traerPuntajesUsuarios.php"); ?>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
        if (isset($_SESSION['idUsuarios'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Mi Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="views/stats.php" tabindex="-1" aria-disabled="true">Ranking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php" tabindex="-1" aria-disabled="true">Premios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="points.php" tabindex="-1" aria-disabled="true">Ingresa tus puntos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger fw-bold" tabindex="-1" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a>
        </li>

        <?php else:?>
        <li class="nav-item">
          <a class="nav-link" href="php/login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php" tabindex="-1" aria-disabled="true">Register</a>
        </li>
          <?php endif ?>

    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border border-2 border-danger">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">CERRAR SESION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      ¿<span class="fw-bold"><?php echo $_SESSION["nombre"]; ?></span> desea cerrar sesion?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
        <a type="button" class="btn btn-danger" href="php/logout.php">Cerrar</a>
      </div>
    </div>
  </div>
</div>