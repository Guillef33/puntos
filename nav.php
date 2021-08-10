<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">TusPuntos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="welcome.php">Inicio</a>
        </li>
        <?php 
        session_start();
        if (isset($_SESSION['idUsuarios'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Mi Perfil</a>
        </li>
        <?php endif ?>
        <li class="nav-item">
          <a class="nav-link" href="stats.php" tabindex="-1" aria-disabled="true">Ranking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php" tabindex="-1" aria-disabled="true">Premios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="points.php" tabindex="-1" aria-disabled="true">Ingresa tus puntos</a>
        </li>
    </div>
  </div>
</nav>
