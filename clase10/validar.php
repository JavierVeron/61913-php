<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validación - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
            //Capturo los datos del Form
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];

            if (($usuario == "javier.veron@gmail.com") && ($clave == "123456")) {
                session_start(); //Iniciar la sesión

                // Definimos las variables de sesión
                $_SESSION["nombre"] = "Javier Verón";
                $_SESSION["curso"] = "PHP y MySQL";
                $_SESSION["institucion"] = "Educación IT";
                header("location:principal.php");
            } else {
                echo '<div class="alert alert-danger" role="alert">Error! El Usuario y Contraseña es inválido!</div>
                <p><a href="index.php" class="btn btn-secondary">Volver al Inicio</a></p>';
            }
            ?>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>