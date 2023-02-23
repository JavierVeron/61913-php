<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activar Usuario - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
            <?php
            include("config.php");

            // Capturo los datos del Formulario
            $email = trim($_REQUEST["email"]);
            $token = trim($_REQUEST["token"]);

            if (!$email) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado una Dirección de Email!</h3>');
            }

            if (!$token) {
                die('<div class="alert alert-danger" role="alert"><h3>Error! No ha especificado un Token!</h3>');
            }

            $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
            // Crear el SQL para Insertar un nuevo Usuario
            $consulta = 'SELECT * FROM usuarios WHERE email LIKE "' .$email .'" AND token LIKE "' .$token .'"';
            //die($consulta);
            $resultado = mysqli_query($conexion, $consulta);
            $filas = mysqli_num_rows($resultado);

            if ($filas > 0) {
                $fila = mysqli_fetch_assoc($resultado);
                // Enviar el email con los datos de registración
                $consulta = 'UPDATE usuarios SET activo = 1, fecha_activacion = "' .date("Y-m-d H:i:s") .'" WHERE id = ' .$fila["id"];
                $resultado = mysqli_query($conexion, $consulta);
                $filas_afectadas = mysqli_affected_rows($conexion);
                
                if ($filas_afectadas > 0) {
                    $mensaje = '<div class="alert alert-secondary" role="alert"><h1>Listo! Tu Usuario ya ha sido activado!</h1>
                    <p>Ya podés iniciar sesión!</p>
                    <p><a href="index.php" class="btn btn-primary">Iniciar Sesión</a></p></div>';
                    echo $mensaje;
                } else {
                    echo '<div class="alert alert-danger" role="alert"><h3>Error! No se pudo activar el Usuario!</h3>';    
                }                
            } else {
                echo '<div class="alert alert-danger" role="alert"><h3>Error! El Email y el Token no son válidos!</h3>';
            }

            mysqli_close($conexion);
            ?>
            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>