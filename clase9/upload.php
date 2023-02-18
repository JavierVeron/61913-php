<?php
$nombre = $_POST["nombre"];
$archivo = $_FILES["archivo"];

echo "<p>Nombre: " .$nombre ."</p>";
//echo "<p>Archivo: " .$archivo ."</p>";

print_r($archivo);

if ($archivo["type"] != "image/jpeg") {
    die("El Formato del Archivo no es un JPG!");
}

if ($archivo["size"] > 1000000) {
    die("El Tamaño del Archivo supera el Mega!");
}

//print_r($archivo);
$directorio_subida = "uploads/";
$nombre_archivo = date("Y-m-d-H-i-s") .".jpg";
move_uploaded_file($archivo["tmp_name"], $directorio_subida .$nombre_archivo);
echo "El archivo se subió correctamente!";
?>