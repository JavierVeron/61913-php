<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                include("config.php");

                $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT) || (die("Error! No se pudo conectar a la Base de Datos!"));

                // INSERT => Insetar datos en la BD
                /* $consulta = 'INSERT INTO alumnos (apellido, nombre, nro_documento) VALUES ("Perez Maciel", "Gerardo")';
                //die($consulta);
                $resultado = mysqli_query($conexion, $consulta);
                $filas = mysqli_affected_rows($conexion);

                if ($filas > 0) {
                    echo '<div class="alert alert-success" role="alert">El registro se agregó correctamente!</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error! El registro no se agregó correctamente!</div>';
                } */


                // UPDATE => Actualiza datos en la BD. Siempre es conveniente especificar un WHERE
                /* //$consulta = 'UPDATE alumnos SET nro_documento = 66778899, fecha_nacimiento = "1990-02-03 20:20" WHERE id = 4';
                $consulta = 'UPDATE alumnos SET activo = 1';
                $resultado = mysqli_query($conexion, $consulta);
                $filas = mysqli_affected_rows($conexion);

                if ($filas > 0) {
                    echo '<div class="alert alert-success" role="alert">Se actualizaron correctamente ' .$filas .' registros!</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error! El registro no se actualizó correctamente!</div>';
                } */


                // DELETE => Elimina datos en la BD. Siempre es convienente especificar un WHERE. Hacer un BACKUP (POR LAS DUDAS!!!)
                /* $consulta = 'DELETE FROM alumnos WHERE id = 1';
                $resultado = mysqli_query($conexion, $consulta);
                $filas = mysqli_affected_rows($conexion);

                if ($filas > 0) {
                    echo '<div class="alert alert-success" role="alert">Se eliminaron correctamente ' .$filas .' registros!</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error! El registro no se actualizó correctamente!</div>';
                } */
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
