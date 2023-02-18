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
                <a href="index.php" class="text-decoration-none text-dark"><h1>ABM de Alumnos</h1></a>
                <?php
                include("../config.php");
                include("funciones.php");

                if (isset($_REQUEST["accion"])) {
                    $accion = $_REQUEST["accion"];

                    if ($accion == "eliminar") {
                        $id = $_REQUEST["id"];
                        eliminarImagen($id);
                        $usuario = eliminarUsuario($id);
    
                        if ($usuario) {
                            echo '<div class="alert alert-success" role="alert">El alumno se eliminó correctamente!</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Error! El alumno no se eliminó correctamente!</div>';
                        }
                    }
                }
                ?>                
                <table class="table">
                    <tr>
                        <td colspan="8" class="text-end">
                            <a href="formulario.php?accion=nuevo" class="btn btn-success">Agregar</a>
                        </td>
                    </tr>
                    <?php
                    $filas = listarUsuarios();

                    if (count($filas) > 0) {
                        echo "<tr>\n";
                        echo "<th class='text-center'>#</th>\n";
                        echo "<th class='text-center'>&nbsp;</th>\n";
                        echo "<th class='text-center'>Nombre</th>\n";
                        echo "<th class='text-center'>Apellido</th>\n";
                        echo "<th class='text-center'>Email</th>\n";
                        echo "<th class='text-center'>Número de Documento</th>\n";
                        echo "<th class='text-center'>Activo</th>\n";
                        echo "<th class='text-center'>&nbsp;</th>\n";
                        echo "</tr>\n";

                        foreach ($filas as $fila) {
                            echo "<tr>\n";
                            echo "<td class='text-center align-middle'>" .$fila["id"] ."</td>\n";
                            echo "<td class='text-center align-middle'><img src='imagenes/" .($fila["imagen"] == "" ? "foto-perfil.svg" : $fila["imagen"]) ."' alt='" .$fila["nombre"] ."' width='64' /></td>\n";                            
                            echo "<td class='text-center align-middle'>" .$fila["nombre"] ."</td>\n";
                            echo "<td class='text-center align-middle'>" .$fila["apellido"] ."</td>\n";
                            echo "<td class='text-center align-middle'>" .$fila["email"] ."</td>\n";
                            echo "<td class='text-center align-middle'>" .$fila["nro_documento"] ."</td>\n";
                            echo "<td class='text-center align-middle'>" .($fila["activo"] == 1 ? "<span class='badge bg-success'>SI</span>" : "<span class='badge bg-danger'>NO</span>") ."</td>\n";
                            echo "<td class='text-end align-middle'><a href='formulario.php?accion=editar&id=" .$fila["id"] ."' title='Editar'><img src='images/editar.svg' alt='Editar' width='24' /></a> <a href='index.php?accion=eliminar&id=" .$fila["id"] ."' title='Eliminar'><img src='images/eliminar.svg' alt='Eliminar' width='24' /></a></td>\n";
                            echo "</tr>\n";
                        }
                    } else {
                        echo "<tr>\n";
                        echo "<td><h3>Error! No se encontraron registros!</h3></td>\n";
                        echo "</tr>\n";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
