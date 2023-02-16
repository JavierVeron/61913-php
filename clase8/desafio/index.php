<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABM de Alumnos - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1>ABM de Alumnos</h1>
                <table class="table">
                    <tr>
                        <td colspan="7" class="text-end">
                            <a href="formulario.php?accion=nuevo" class="btn btn-success">Agregar</a>
                        </td>
                    </tr>
                    <?php
                    include("../config.php");

                    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
                    $consulta = 'SELECT * FROM alumnos ORDER BY nombre, apellido';
                    $resultado = mysqli_query($conexion, $consulta);
                    $total_filas = mysqli_num_rows($resultado);

                    if ($total_filas > 0) {
                        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                        echo "<tr>";
                        echo "<th class='text-center'>#</th>";
                        echo "<th class='text-center'>Nombre</th>";
                        echo "<th class='text-center'>Apellido</th>";
                        echo "<th class='text-center'>Email</th>";
                        echo "<th class='text-center'>Número de Documento</th>";
                        echo "<th class='text-center'>Activo</th>";
                        echo "<th class='text-center'>&nbsp;</th>";
                        echo "</tr>";

                        foreach ($filas as $fila) {
                            echo "<tr>";
                            echo "<td class='text-center'>" .$fila["id"] ."</td>";
                            echo "<td class='text-center'>" .$fila["nombre"] ."</td>";
                            echo "<td class='text-center'>" .$fila["apellido"] ."</td>";
                            echo "<td class='text-center'>" .$fila["email"] ."</td>";
                            echo "<td class='text-center'>" .$fila["nro_documento"] ."</td>";
                            echo "<td class='text-center'>" .($fila["activo"] == 1 ? "<span class='badge bg-success'>SI</span>" : "<span class='badge bg-danger'>NO</span>") ."</td>";
                            echo "<td class='text-end'><a href='formulario.php?accion=editar&id=" .$fila["id"] ."' title='Editar'><img src='images/editar.svg' alt='Editar' width='24' /></a> <a href='#' title='Eliminar'><img src='images/eliminar.svg' alt='Eliminar' width='24' /></a></td>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td><h3>Error! No se encontraron registros!</h3></td>";
                        echo "</tr>";
                    }





                    ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
