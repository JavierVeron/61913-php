<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Usuario - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
            <?php
            include("config.php");

            // Capturo los datos del Formulario
            $nombre = trim($_POST["nombre"]);
            $email = trim($_POST["email"]);
            $clave = md5(trim($_POST["clave"])); // Encripto la contraseña
            $fecha_hora = date("Y-m-d H:i:s");
            $token = md5($fecha_hora);

            if (!$nombre) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado un Nombre!</h3>');
            }

            if (!$email) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado un Email!</h3>');
            }

            if (!$clave) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado una Clave!</h3>');
            }

            $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
            // Crear el SQL para Insertar un nuevo Usuario
            $consulta = 'INSERT INTO usuarios (nombre, email, clave, activo, fecha_alta, token) VALUES ("' .$nombre .'", "' .$email .'", "' .$clave .'", 0, "' .$fecha_hora .'", "' .$token .'")';
            //die($consulta);
            $resultado = mysqli_query($conexion, $consulta);
            $filas_afectadas = mysqli_affected_rows($conexion);

            if ($filas_afectadas > 0) {
                // Enviar el email con los datos de registración
                
                $mensaje = '<div class="alert alert-secondary" role="alert"><h1>Gracias por tu Registración</h1>
                <p>Por favor, hacé click en el enlace para activar tu Usuario!</p>
                <p><a href="activarUsuario.php?email=' .$email .'&token=' .$token .'" class="btn btn-primary">Activar Usuario</a></p></div>';
                echo $mensaje;
            } else {
                echo '<div class="alert alert-danger" role="alert"><h1>Error! No se pudo registrar el Usuario!</h1>';
            }

            mysqli_close($conexion);
            ?>
            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>