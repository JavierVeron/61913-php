<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase 6 - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                // Definiendo Constantes
                /* include("config.php");
                
                $valor = trim($_REQUEST["valor"]);
                $valorIVA = $valor + (($valor * IVA) / 100);
                echo "<p>El valor de IVA es: $" .$valorIVA ."</p>"; */



                // Manejo de Archivos
                // Leer un Archivo
                /* $nombre_archivo = "datos.txt";
                $archivo = fopen($nombre_archivo, "r"); //Guardamos en una variable el Handler del Archivo, el parámetro "R" indica que es de solo lectura
                $tamanio = filesize($nombre_archivo); //Obtenemos el tamaño del archivo
                $contenido = fread($archivo, $tamanio); //Leemos el contenido del archivo
                echo $contenido;
                fclose($archivo); //Cerramos la apertura del archivo */

                // Guardar un Archivo
                /* $nombre_archivo = "datos.txt";
                $archivo = fopen($nombre_archivo, "a+"); //Guardamos en una variable el Handler del Archivo, el parámetro "W" indica que es escritura
                $contenido_nuevo = "Registro de Archivo " .date("d-m-Y H:i:s") ."\n";
                fwrite($archivo, $contenido_nuevo);
                fclose($archivo); //Cerramos la apertura del archivo
                echo "El archivo se actualizó correctamente!"; */

                // Leyendo Archivos .csv
                /* $nombre_archivo = "datos.csv";
                $archivo = fopen($nombre_archivo, "r");

                echo "<table class='table table-striped'>";
                echo "<tr>";
                echo "<td>Nombre</td>";
                echo "<td>Apellido</td>";
                echo "<td>Email</td>";
                echo "<td>Provincia</td>";
                echo "<td>País</td>";
                echo "</tr>";

                while ($linea = fgetcsv($archivo, filesize($nombre_archivo), ";")) {
                    echo "<tr>";
                    echo "<td>" .$linea[0] ."</td>";
                    echo "<td>" .$linea[1] ."</td>";
                    echo "<td>" .$linea[2] ."</td>";
                    echo "<td>" .$linea[3] ."</td>";
                    echo "<td>" .$linea[4] ."</td>";
                    echo "</tr>";
                }

                echo "</table>"; */
       
                

                // Funciones de Manejo de Archivos
                $nombre_archivo = "datos.txt";
                $archivo = fopen($nombre_archivo, "r");

                // Passthru
                /* $contenido = fpassthru($archivo);
                echo $contenido;
                fclose($archivo); */

                // Filegetc
                /* while ($contenido = fgetc($archivo)) {
                    echo $contenido;
                } */

                // Feof
                /* while (!feof($archivo)) {
                    $contenido = fgetc($archivo);
                    echo $contenido;
                }; */

                // Fgets
                /* while (!feof($archivo)) {
                    $contenido = fgets($archivo, filesize($nombre_archivo));
                    echo $contenido ."<br>";
                } */

                // Fgetss (obsoleta)
                /* while (!feof($archivo)) {
                    $buffer = fgetss($archivo, 4096);
                    echo $buffer;
                }

                fclose($archivo); */
                
                // File
                /* $archivoArray = file($nombre_archivo);
                //var_dump($archivoArray);
                echo $archivoArray[2] */

                // Is Writable
                /* if (is_writable($nombre_archivo)) {
                    echo "Se puede editar el archivo!";
                } else {
                    echo "Error! No se puede editar el archivo!";
                } */

                // Rewind
                /* while (!feof($archivo)) {
                    $contenido = fgets($archivo, filesize($nombre_archivo));
                    echo $contenido ."-<br>";
                }

                rewind($archivo);
                $contenido = fgets($archivo, filesize($nombre_archivo));
                echo $contenido ."<br>"; */

                // Fseek
                /* fseek($archivo, 16);
                $contenido = fgets($archivo, filesize($nombre_archivo));
                echo $contenido ."<br>"; */

                // Copy
                //copy($nombre_archivo, "/xampp/htdocs/educacionit/61913/clase6/archivos/shoba.txt");

                // Rename
                //rename("archivos/datos_copy.txt", "archivos/datos.txt");

                // Unlink (elimina archivos)
                /* $ruta = "archivos/datos.txt";

                if (is_writable($ruta)) {
                    if (unlink("archivos/datos.txt")) {
                        echo "El achivo se eliminó correctamente!";
                    } else {
                        echo "No se pudo eliminar el archivo!";
                    }
                } else {
                    echo "No tienes permisos para eliminar el archivo!";
                } */

                // File_exists
                /* if (file_exists("datos.txt")) {
                    echo "Existe el archivo!";
                } else {
                    echo "No existe el archivo!";
                } */

                // Fileatime
                /* $fecha = fileatime($nombre_archivo);
                echo "El último acceso del Archivo es: " .date("d-m-Y H:i:s", fileatime($nombre_archivo)); */

                // File get contents
                /* $contenido = file_get_contents("mipagina.html");
                echo $contenido; */

                // Path info
                /* $info = pathinfo("archivos/" .$nombre_archivo);
                //var_dump($info) ."<br>";
                echo "Directorio: <b>" .$info["dirname"] ."</b><br>";
                echo "Archivo: <b>" .$info["filename"] ."</b><br>";
                echo "Extensión: <b>" .$info["extension"] ."</b>"; */

                // Opendir y ReadDir
                /* $directorio = opendir("archivos");
                
                while ($archivo = readdir($directorio)) {
                    if (!is_dir($archivo)) {
                        echo $archivo ."<br>";
                        $contenido = file_get_contents("archivos/" .$archivo);
                        echo $contenido ."<br><br>";
                    }
                };

                closedir($directorio); */

                // Chdir
                echo getcwd() ."<br>";
                chdir("archivos_temporales");
                echo getcwd();
                ?>
            </div>
        </div>
    </div>  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
