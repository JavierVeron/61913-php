<?php
$nombre_archivo = $_REQUEST["archivo"];
$tipo_archivo = $_REQUEST["tipo_archivo"];

$archivo = fopen($nombre_archivo, "r");

while (!feof($archivo)) {
    if ($tipo_archivo == "txt") {
        $contenido = fgets($archivo, filesize($nombre_archivo)); //String
        echo $contenido ."<br>";    
    } else {
        $contenido = fgetcsv($archivo, filesize($nombre_archivo), ";"); //Array
        echo "Nombre: " .$contenido[0] ." - Email: " .$contenido[1] ."<br>";
    }

    if (feof($archivo)) {
        break;
    };
}
?>