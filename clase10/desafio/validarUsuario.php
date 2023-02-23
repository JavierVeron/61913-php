<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validar Usuario - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
            <?php
            //die(md5("112233"));
            include("config.php");

            // Capturo los datos del Formulario
            $usuario = trim($_POST["usuario"]);
            $clave = trim($_POST["clave"]);

            if (!$usuario) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado un Usuario!</h3>');
            }

            if (!$clave) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado una Clave!</h3>');
            }

            $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
            // Crear el SQL para Insertar un nuevo Usuario
            $consulta = 'SELECT id, nombre, email, activo FROM usuarios WHERE email LIKE "' .$usuario .'" AND clave LIKE "' .md5($clave) .'"';
            //die($consulta);
            $resultado = mysqli_query($conexion, $consulta);
            $filas = mysqli_num_rows($resultado);

            if ($filas > 0) {
                $fila = mysqli_fetch_assoc($resultado);

                if ($fila["activo"] == 1) {
                    session_start();
                    $_SESSION["logueado"] = "SI";
                    $_SESSION["id"] = $fila["id"];
                    $_SESSION["nombre"] = $fila["nombre"];
                    $_SESSION["email"] = $fila["email"];

                    // Redirecciono a la Página Principal de mi Aplicación
                    header("location:principal.php");
                } else {
                    echo '<div class="alert alert-danger" role="alert"><h3>Error! El Usuario no ha sido activado!</h3>';
                }                               
            } else {
                echo '<div class="alert alert-danger" role="alert"><h3>Error! El Usuario y la Contraseña no son válidas!</h3>';
            }

            mysqli_close($conexion);
            ?>
            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>