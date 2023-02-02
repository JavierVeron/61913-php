<?php
$menu = $_POST["menu"];

function validarMenu($menu) {
    switch($menu) {
        case "hamburguesas":
            header("location: hamburguesas.php");
            break;
        case "pollo":
            header("location: sandwiches-de-pollo.php");
            break;
        case "papas":
            header("location: papas-fritas.php");
            break;
    }
}

validarMenu($menu);
?>