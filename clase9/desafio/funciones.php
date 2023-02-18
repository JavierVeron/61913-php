<?php
function listarUsuarios() {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $consulta = 'SELECT id, imagen, nombre, apellido, email, nro_documento, activo FROM alumnos ORDER BY id';
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    mysqli_close($conexion);

    return $filas;
}

function obtenerUsuario($id) {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $consulta = 'SELECT * FROM alumnos WHERE id = ' .$id;
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    mysqli_close($conexion);

    return $filas > 0 ? mysqli_fetch_assoc($resultado) : false;
}

function agregarUsuario() {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $email = trim($_POST["email"]);
    $nro_documento = trim($_POST["nro_documento"]);
    $fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
    $activo = $_POST["activo"];
    $nombre_imagen = subirImagen();

    //Inserto los datos del formulario en la BD
    $consulta = 'INSERT INTO alumnos (nombre, apellido, email, nro_documento, fecha_nacimiento, imagen, activo, fecha_alta) VALUES ("' .$nombre .'", "' .$apellido .'", "' .$email .'", ' .$nro_documento .',"' .$fecha_nacimiento .'", "' .$nombre_imagen .'", ' .$activo .', "' .date("Y-m-d H:i:s") .'")';
    //die($consulta);
    mysqli_query($conexion, $consulta);
    $filas = mysqli_affected_rows($conexion); 
    mysqli_close($conexion);

    return $filas > 0 ? true : false;
}

function editarUsuario() {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $email = trim($_POST["email"]);
    $nro_documento = trim($_POST["nro_documento"]);
    $fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
    $activo = $_POST["activo"];
    $id = $_REQUEST["id"];

    if ($_FILES["imagen"]["name"] != "") {
        eliminarImagen($id);
        $nombre_imagen = subirImagen();
        //Consulta UPDATE con imagen
        $consulta = 'UPDATE alumnos SET nombre = "' .$nombre .'", apellido = "' .$apellido .'", email = "' .$email .'", nro_documento = ' .$nro_documento .', fecha_nacimiento = "' .$fecha_nacimiento .'", imagen = "' .$nombre_imagen .'" , activo = ' .$activo .', fecha_modificacion = "' .date("Y-m-d H:i:s") .'" WHERE id = ' .$id;
    } else {
        //Consulta UPDATE sin imagen
        $consulta = 'UPDATE alumnos SET nombre = "' .$nombre .'", apellido = "' .$apellido .'", email = "' .$email .'", nro_documento = ' .$nro_documento .', fecha_nacimiento = "' .$fecha_nacimiento .'", activo = ' .$activo .', fecha_modificacion = "' .date("Y-m-d H:i:s") .'" WHERE id = ' .$id;
    }

    //die($consulta);
    mysqli_query($conexion, $consulta);
    $filas = mysqli_affected_rows($conexion); 
    mysqli_close($conexion);

    return $filas > 0 ? true : false;
}

function eliminarUsuario($id) {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $consulta = 'DELETE FROM alumnos WHERE id = ' .$id;
    //die($consulta);
    mysqli_query($conexion, $consulta);
    $filas = mysqli_affected_rows($conexion);
    mysqli_close($conexion);

    return $filas > 0 ? true : false;
}

function subirImagen() {
    $imagen = $_FILES["imagen"];
    $directorio = "imagenes/";
    $nombre_imagen = date("Y-m-d-H-i-s") .".jpg";
    $ruta_imagen = $directorio .$nombre_imagen;

    return move_uploaded_file($imagen["tmp_name"], $ruta_imagen) ? $nombre_imagen : "";
}

function eliminarImagen($id) {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    // Consultar en la BD el nombre de la imagen que había previamente
    $consulta = 'SELECT imagen FROM alumnos WHERE id = ' .$id;
    //die($consulta);
    $resultado = mysqli_query($conexion, $consulta);
    $total_filas = mysqli_num_rows($resultado);

    if ($total_filas > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        unlink("imagenes/" .$fila["imagen"]); //Eliminar la imagen de la carpeta
    }
}