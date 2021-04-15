<?php
    include_once("funciones.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Audio Hall</title>
</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Audio Hall</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaactual == "index.php" ? "active" : "")?>" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaactual == "hardware.php" ? "active" : "")?>" href="hardware.php">Hardware</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaactual == "software.php" ? "active" : "")?>" href="software.php">Software</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaactual == "artistas.php" ? "active" : "")?>" href="artistas.php">Artistas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Únete a nosotros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item <?php echo ($paginaactual == "demos.php" ? "active" : "")?>" href="demos.php">Envía un demo</a></li>
            <li><a class="dropdown-item <?php echo ($paginaactual == "membresia.php" ? "active" : "")?>" href="membresia.php">Conviértete en un miembro</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>