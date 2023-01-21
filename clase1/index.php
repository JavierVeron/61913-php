<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 - Educación IT</title>
</head>
<body>
    <!-- Esto es un comentario -->
    <h1>Hola Mundo!</h1>
    <?php
    // Función que devuelve tal cola
    /*
    echo '<p style="color:red; font-weight:bold;">Bienvenidos al Curso de PHP y MySQL</p>';
    echo '<p style="color:red; font-weight:bold;">Bienvenidos al Curso de PHP y MySQL</p>';
    */
    
    /* echo "<p style='color:red; font-weight:bold;'>Bienvenidos al Curso de PHP y MySQL</p>"; */
    
    // Variables
    // Evitar acentos, espacios y eñes. Usar variables en formato CamelCase. Siempre comenzar con letras y no con números
    /* $valor1 = 10;
    $valor2 = 100.50;
    $nombre = 'Javier';
    $apellido = 'Verón';
    $variable3 = $nombre .' ' .$valor2;
    echo "<p>" .$valor1 ."</p>";
    echo $variable3; */


    // Operadores Aritméticos
    /* $valor1 = 100;
    $valor2 = 200;
    $suma = $valor1 + $valor2;
    $resta = $valor1 - $valor2;
    $multiplicacion = $valor1 * $valor2;
    $division = $valor2 / $valor1;
    $resto = $valor2%2;
    echo "Suma: " .$suma ."<br>";
    echo "Resta: " .$resta ."<br>";
    echo "Multiplicación: " .$multiplicacion ."<br>";
    echo "División: " .$division ."<br>";
    echo "Resto: " .$resto ."<br>"; */


    // Operadores Texto
    /* $nombre = "Javier";
    $apellido = "Verón";
    $nombreCompleto = $nombre ." " .$apellido;
    echo $nombreCompleto; */


    // Operadores 
    $a = 10;
    $b = 20;

    /* if ($a >= 10) {
        echo "A es mayor o igual que 10!";
    } else {
        echo "A es menor!";
    } */

    // A y B verdaderas (AND)
    /* if (($a > 5) && ($b > 10)) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */

    // A verdadera y B falsa (AND)
    /* if (($a > 5) && ($b > 50)) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */

    // A falsa o B verdadera (OR)
    /* if (($a > 20) || ($b > 10)) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */


    // Comparación igual
    /* if ($a == 10) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */

    // Comparación con distinto
    /* if ($a != 20) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */

    // - -100 => 100
    // no (no te puedo decir) => te puedo decir
    // A verdadera (NOT) 
    /* if (!($a == 10)) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */

    // Comparación con == (compara solo el valor)
    /* if ("2" == 2) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */

    // Comparación estricta con === (compara valor y tipo de dato)
    /* if ("2" === 2) {
        echo "Se cumple la condicion!";
    } else {
        echo "No se cumple la condición";
    } */
    ?>
</body>
</html>