<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 bg-body-tertiary">
            <?php
            include("config.php");
            include("funciones.php");

            session_start();

            if (!isset($_SESSION["logueado"])) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No se ha iniciado la sesión!</h3>');
            }

            include("barraNavegacion.php");
            ?>
            </div>
            <div class="col-md-6 bg-body-tertiary text-end">
                <a class="nav-link active" aria-current="page" href="perfil.php">Editar Perfil</a>
                <a class="nav-link text-secondary" href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col text-center">
                <h1>Bienvenidos al Sistemas de Usuarios!</h1>
            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>