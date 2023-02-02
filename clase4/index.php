<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase 4 - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
            // Uso de Include y Require
            /* require("files/archivo1.php"); //Es requerido, en caso de que no exista tira un Error
            include("files/archivo2.php"); // Incluye el archivo, en caso de que no exista tira un Warning

            $nombre2 = "Pablo";

            echo $nombre1 ."(" .$numero1 .")<br>";
            echo $nombre2 ."(" .$numero2 .")"; */

            
            // Peticiones de Encabezado
            /* $encabezado = apache_request_headers();
            print_r($encabezado); */
            //header("Content-type: text/plain");
            //echo "<p class='bg-dark text-danger text-center'>Esto se va a mostrar en texto plano!</p>";

            // Funciones
            /* function realizarSuma($num1, $num2) {
                if (!is_numeric($num1)) {
                    die("<p class='text-danger'>El parámetro1 no es un valor numérico!</p>");
                }

                if (!is_numeric($num2)) {
                    die("<p class='text-danger'>El parámetro2 no es un valor numérico!</p>");
                }

                return $num1 + $num2;
            }

            $valor1 = 20;
            $valor2 = 30;
            $resultado = realizarSuma($valor1, $valor2);
            echo "La suma es: " .realizarSuma(100, 1000); */

            // Funciones con parámetros opcionales
            /* function calcularIVA($valor, $iva=21) {
                return (($valor * $iva) / 100);
            }

            $resultado = calcularIVA(10000); // Sin parámetro opcional
            $resultado = calcularIVA(10000, 30); // Con parámetro opcional
            echo "El IVA es: <b>$" .$resultado ."</b>"; */

            /* include("files/archivo2.php");
            $nombre1 = "Lionel Messi";

            detectarNombre($nombre1); */
            

            // Ambito de las variables (locales y globales)
            /* $saludo = "Hola Educación IT!"; //variable global
            
            function saludar() {
                $saludo = "Hola Mundo!"; //variable local

                echo $saludo;
            }

            //saludar() ."<br>";
            //echo $saludo;

            // Convierto una variable local en global
            function saludar2() {
                global $saludo; //Convierto una variable local en global
                $saludo = "Hola Chicos!";

                return $saludo;
            }

            saludar2() ."<br>";
            echo $saludo; */
            ?>
            </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


