<?php
function validarNombre($valor) {
    estaVacio($valor, "Nombre");

    if ((strlen($valor) < 2) || (strlen($valor) > 50)) {
        mostrarMensajeError("<b>Error!</b> El campo <b>Nombre</b> debe tener una longitud entre 2 y 50 caracteres!");
    }
}

function validarEmail($valor) {
    estaVacio($valor, "Email");
    emailValido($valor);

    /* if (!str_contains($valor, "@")) {
        mostrarMensajeError("<b>Error!</b> El campo <b>Email</b> debe ser una dirección válida!</div>");
    } */
}

function validarContrasena($valor) {
    estaVacio($valor, "Contraseña");

    if (strlen($valor) < 6) {
        mostrarMensajeError("<b>Error!</b> El campo <b>Contraseña</b> debe ser superior a los 6 caracteres!</div>");
    }
}

function validarPrecio($valor) {
    estaVacio($valor, "Precio");

    $valor = convertirPrecio($valor);
    $valor == 0 ? mostrarMensajeError("<b>Error!</b> El valor ingresado en Precio no es numérico!") : "";
    $valor > 10000 ? mostrarMensajeError("<b>Error!</b> El campo <b>Precio</b> no debe superar los $10.000 pesos!") : "";
}

function emailValido($email) {
    $expresion_regular = '/[a-z][a-z]*[@][a-z]*[.][a-z][a-z]*/';
    !preg_match($expresion_regular, $email) ? mostrarMensajeError("<b>Error!</b> Ingrese una dirección de email válida!") : "";
}

function datosOk($nombre, $email, $contrasena, $precio) {
    $salida = '<h3>Datos Ingresados</h3>
    <p>Nombre: <b>' .$nombre .'</b><br>
    Email: <b>' .$email .'</b><br>
    Contraseña: <b>' .$contrasena .'</b><br>
    Precio: <b>$' .$precio .'</b></p>';
    mostrarMensajeOk($salida);
}

function mostrarMensajeError($mensaje) {
    die('<div class="alert alert-danger" role="alert">' .$mensaje .'</div>');
}

function mostrarMensajeOk($mensaje) {
    die('<div class="alert alert-success" role="alert">' .$mensaje .'</div>');
}

function convertirPrecio($valor) {
    return is_numeric($valor) ? round($valor) : 0;
}

function estaVacio($valor, $campo) {
    empty($valor) ? mostrarMensajeError("b>Error!</b> El campo <b>' .$campo .'</b> está vacío!") : "";
}

?>