<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col my-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cursos.php">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php?nivel=principiante">Principiante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php?nivel=intermedio">Intermedio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php?nivel=avanzado">Avanzado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php?nivel=experto">Experto</a>
                    </li>
                </ul>
                <?php
                include("config.php");

                $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);

                if (!$conexion) {
                    die("Error! No se pudo conectar a la Base de Datos!");
                }

                if (isset($_REQUEST["nivel"])) {
                    $nivel = $_REQUEST["nivel"];
                    $consulta = 'SELECT c.*, n.nombre as nombre_nivel FROM cursos c, nivel n WHERE (c.nivel = n.id) AND (n.nombre LIKE "' .$nivel .'")';
                } else {
                    $consulta = 'SELECT c.*, n.nombre as nombre_nivel FROM cursos c, nivel n WHERE (c.nivel = n.id)';
                }               
                
                $resultado = mysqli_query($conexion, $consulta);
                $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                $cantidad = mysqli_num_rows($resultado);

                if ($cantidad > 0) {
                    foreach ($filas as $fila) {
                        echo '<div class="row my-3 border border-primary rounded">';
                        echo '<div class="col-md-8">';
                        echo '<h3>' .$fila["nombre"] .'</h3>';
                        echo '<p>' .$fila["descripcion"] .'</p>';
                        echo '<p>Nivel: <b>' .$fila["nombre_nivel"] .'</b></p>';
                        echo '<h4 class="text-danger">$' .$fila["precio"] .'</h4>';
                        echo '</div>';
                        echo '<div class="col-md-4">';
                        echo '<img src="' .$fila["imagen"] .'" class="img-fluid" />';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="row my-3">';
                    echo '<div class="alert alert-primary text-center" role="alert">No se encontraron Cursos!</div>';
                    echo '</div>';
                }

                mysqli_close($conexion);
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
