<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Alumnos - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row bg-body-tertiary">
            <div class="col-md-6">
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
            <div class="col-md-6 text-end">
                <a class="nav-link active" aria-current="page" href="perfil.php">Editar Perfil</a>
                <a class="nav-link text-secondary" href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col text-center">
                <table class="table">
                <?php
                $filas = listarAlumnos();

                if (count($filas) > 0) {
                    echo "<tr>\n";
                    echo "<th class='text-center'>#</th>\n";
                    echo "<th class='text-center'>&nbsp;</th>\n";
                    echo "<th class='text-center'>Nombre</th>\n";
                    echo "<th class='text-center'>Apellido</th>\n";
                    echo "<th class='text-center'>Email</th>\n";
                    echo "<th class='text-center'>Número de Documento</th>\n";
                    echo "<th class='text-center'>Activo</th>\n";
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