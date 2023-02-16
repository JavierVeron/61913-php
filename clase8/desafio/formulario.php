<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de ABM de Alumnos - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <a href='index.php' class='btn btn-success mb-5'>Volver a la Página Principal</a>
                <h1>Formulario de ABM de Alumnos</h1>
                <?php
                include("../config.php");

                $accion = $_REQUEST["accion"];

                if ($accion == "guardarDatos") {
                    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
                    $nombre = trim($_POST["nombre"]);
                    $apellido = trim($_POST["apellido"]);
                    $email = trim($_POST["email"]);
                    $nro_documento = trim($_POST["nro_documento"]);
                    $fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
                    $activo = $_POST["activo"];

                    //Inserto los datos del formulario en la BD
                    $consulta = 'INSERT INTO alumnos (nombre, apellido, email, nro_documento, fecha_nacimiento, activo) VALUES ("' .$nombre .'", "' .$apellido .'", "' .$email .'", ' .$nro_documento .',"' .$fecha_nacimiento .'", ' .$activo .')';
                    //die($consulta);
                    $resultado = mysqli_query($conexion, $consulta);
                    $filas = mysqli_affected_rows($conexion);

                    if ($filas > 0) {
                        echo '<div class="alert alert-success" role="alert">El registro se agregó correctamente!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error! El registro no se agregó correctamente!</div>';
                    }
                } else if ($accion == "editarDatos") {
                    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
                    $nombre = trim($_POST["nombre"]);
                    $apellido = trim($_POST["apellido"]);
                    $email = trim($_POST["email"]);
                    $nro_documento = trim($_POST["nro_documento"]);
                    $fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
                    $activo = $_POST["activo"];
                    $id = $_REQUEST["id"];

                    //Inserto los datos del formulario en la BD
                    $consulta = 'UPDATE alumnos SET nombre = "' .$nombre .'", apellido = "' .$apellido .'", email = "' .$email .'", nro_documento = ' .$nro_documento .', fecha_nacimiento = "' .$fecha_nacimiento .'" , activo = ' .$activo .' WHERE id = ' .$id;
                    //die($consulta);
                    $resultado = mysqli_query($conexion, $consulta);
                    $filas = mysqli_affected_rows($conexion);

                    if ($filas > 0) {
                        echo '<div class="alert alert-success" role="alert">El registro se actualizó correctamente!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error! El registro no se actualizó correctamente!</div>';
                    }
                } else if ($accion == "editar") {
                    $id = $_REQUEST["id"];
                    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
                    $consulta = 'SELECT * FROM alumnos WHERE id = ' .$id;
                    $resultado = mysqli_query($conexion, $consulta);
                    $total_filas = mysqli_num_rows($resultado);

                    if ($total_filas > 0) {
                        $fila = mysqli_fetch_assoc($resultado);
                        /* print_r($fila);
                        die(); */
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error! No se encontró un Registro con el ID #' .$id .'</div>';
                    }
                }
                
                if (isset($fila)) {
                    $accion_form = "formulario.php?accion=editarDatos&id=" .$id;
                } else {
                    $accion_form = "formulario.php?accion=guardarDatos";
                }
                ?>

                <form method="post" action="<?php echo $accion_form; ?>">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo (isset($fila) ? $fila["nombre"] : ""); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="<?php echo (isset($fila) ? $fila["apellido"] : ""); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo (isset($fila) ? $fila["email"] : ""); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nro_documento" class="form-label">Número de Documento</label>
                        <input type="number" class="form-control" name="nro_documento" value="<?php echo (isset($fila) ? $fila["nro_documento"] : ""); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <?php
                        if (isset($fila)) {
                            $arrayFechaSinHora = explode(" ", $fila["fecha_nacimiento"]);
                            $arrayFecha = explode("-", $arrayFechaSinHora[0]);
                            $fila["fecha_nacimiento"] = $arrayFecha[2] ."/" .$arrayFecha[1] ."/" .$arrayFecha[0];
                            //print_r($fila["fecha_nacimiento"]);
                        }
                        ?>
                        <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo (isset($fila) ? $fila["fecha_nacimiento"] : ""); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Activo</label>
                        <select class="form-control" name="activo">
                            <?
                            if (isset($fila)) {
                                if ($fila["activo"] == 1) {
                                    echo '<option value="1" selected>Sí</option>
                                    <option value="0">No</option>';
                                } else {
                                    echo '<option value="1">Sí</option>
                                    <option value="0" selected>No</option>';
                                }
                            } else {
                                echo '<option value="1" selected>Sí</option>
                                <option value="0">No</option>';
                            }
                            ?>                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
