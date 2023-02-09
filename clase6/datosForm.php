<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tipo_archivo = $_POST["tipo_archivo"];

function guardarDatos($nombre, $email, $tipo_archivo) {
    $nombre_archivo = $tipo_archivo == "txt" ? "datosForm.txt" : "datosForm.csv";
    $archivo = fopen($nombre_archivo, "a+");
    $contenido_archivo = $tipo_archivo == "txt" ? $nombre ." - " .$email : $nombre .";" .$email;
    fwrite($archivo, $contenido_archivo ."\n");
    fclose($archivo);
    echo "<p>El archivo se guardo correctamente!</p>";
}

function crearLink($tipo_archivo) {
    if ($tipo_archivo == "txt") {
        $archivo = "datosForm.txt";
    } else {
        $archivo = "datosForm.csv";
    }

    echo "<p><a href='leerArchivo.php?archivo=" .$archivo ."&tipo_archivo=" .$tipo_archivo ."'>" .$archivo ."</a></p>";
}

guardarDatos($nombre, $email, $tipo_archivo);
crearLink($tipo_archivo);



?>