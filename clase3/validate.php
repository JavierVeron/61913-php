<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 offset-md-3">
                <?php
                $usuarios = [
                    ["user" => "admin", "pass" => "81dc9bdb52d04dc20036dbd8313ed055"],
                    ["user" => "admin2", "pass" => "827ccb0eea8a706c4c34a16891f84e7b"],
                    ["user" => "root", "pass" => "d8578edf8458ce06fbc5bb76a58c5ca4"]
                ];

                // Entrada de Datos
                $usuario_form = $_POST["usuario"]; //root
                $contrasena_form = $_POST["contrasena"]; //root

                foreach ($usuarios as $usuario) {
                    /* if ($usuario_form == $usuario["user"]) {
                        if ($contrasena_form == $usuario["pass"]) {
                            echo '<div class="alert alert-success" role="alert">Accediste al Sistema!</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta!</div>';
                        }

                        die();
                    } */
                    
                    //if (in_array($usuario_form, $usuario)) && (in_array($contrasena_form, $usuario))) {
                    if (($usuario_form == $usuario["user"]) && (md5($contrasena_form) == $usuario["pass"])) {
                        echo '<div class="alert alert-success" role="alert">Accediste al Sistema!</div>';
                        header("location: principal.php");
                    }
                }

                echo '<div class="alert alert-danger" role="alert">Usuario y Contraseña incorrecta!</div>';
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
