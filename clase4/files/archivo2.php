<?php
$nombre1 = "Javier";
$nombre2 = "Helier";

// Creamos un función que detecte nombres largos (a partir de 7 caracteres)
function detectarNombresLargos($nombres) {
    if (strlen($nombres) >= 7) {
        return true;
    } else {
        return false;
    }
}

// Valide el contenido de la variable
function validarDatos($nombre) {
    if (!is_string($nombre)) {
        die("El valor ingresado no es un String!");
    }

    if (strlen($nombre) < 1) {
        die("No ingresaste un valor!");
    }
}

function detectarNombre($nombre) {
    validarDatos($nombre);

    if (detectarNombresLargos($nombre)) {
        echo "Tenés un nombre largo!";
    } else {
        echo "Tenés un nombre corto!";
    }
}
?>