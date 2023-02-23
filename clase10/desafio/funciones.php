<?php
function listarAlumnos() {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $consulta = 'SELECT id, imagen, nombre, apellido, email, nro_documento, activo FROM alumnos ORDER BY id';
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    mysqli_close($conexion);

    return $filas;
}

function listarCursos() {
    $conexion = mysqli_connect(HOST, USER, PASS, BD, PORT);
    $consulta = 'SELECT id, nombre, imagen, precio FROM cursos ORDER BY id';
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    mysqli_close($conexion);

    return $filas;
}



?>