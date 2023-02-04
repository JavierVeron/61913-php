<?php
$texto = "IT Educación IT!";

// Strings
//Strtoupper => Convierte todo el texto en mayúsculas
/* echo strtoupper($texto) ."<br>";
echo mb_strtoupper($texto); // mb_strtoupper => convierte todo en mayúsculas incluyendo acentos y eñes
$texto_modificado = mb_strtoupper($texto);
echo $texto_modificado; */

// Strtolower => Convierte todo el texto en minúsculas
/* $texto_modificado = strtolower($texto);
$texto_modificado2 = mb_strtolower($texto);
echo $texto_modificado ."<br>";
echo $texto_modificado2; // mb_strtoupper => convierte todo en minúsculas incluyendo acentos y eñes */

// Strlen => Devuleve la cantidad de caracteres de un String
//echo strlen($texto);

// Substr => Devolver una porción de texto a partir del valor inicial y final
/* //$texto_modificado = substr($texto, 0, 5); // Imprime 'Educa'
//$texto_modificado = substr($texto, -3, -1); // Imprime 'IT'
$texto_modificado = substr($texto, (strlen($texto) -3), -1); // Imprime 'Educa'
echo $texto_modificado; */


// Expresiones Regurales
$email = "javier.veron@hotmail.com";
$lista = ["javier.verongmail.com", "leomessi.com"];
$expresion_regular = '/[a-z]*[@][a-z]*[.][a-z]*/';
$validacion = preg_grep($expresion_regular, $lista);
//$validacion = preg_match($expresion_regular, $email);

// Validando un resultado con preg_grep (devuleve un array)
/* if (is_array(($validacion))) {
    if (sizeof($validacion) > 0) {
        echo "Tenes: " .sizeof($validacion) . " dirección(es) de email válida!";
    }
}

print_r($validacion); */

// Validando con preg_match (devuelve un 1 si es válido o 0 si no es válido)
/* if ($validacion) {
    echo "Es una dirección válida!";
} else {
    echo "Error! No es una dirección válida!";
} */


/* $string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1}hola,$3';
echo preg_replace($pattern, $replacement, $string); */


/* $string = '03 de Febrero, 2023';
$pattern = '/(\d+) de (\w+), (\d+)/i';
$replacement = '02 ${1},$3';
echo preg_replace($pattern, $replacement, $string);
 */


// Strpos => Devuelve la ubicación (en integer) de un texto buscado. La primera ocurrencia
/* $pos = strpos($texto, "IT");
print_r($pos); */


// Ucwords y Ucfirst
/* $texto = "estoy cursando php y mysql en educación it!";
echo ucfirst($texto) ."<br>";
echo ucwords($texto) ."<br>"; */


// Md5 y Sha1 => Para encriptar textos
/* $texto = "1234";
$texto_encriptado = md5($texto);
$texto_encriptado2 = sha1($texto);
echo $texto_encriptado ."<br>";
echo $texto_encriptado2; */


// Trim => Quita los espacios de izq y de derecha. Ltrim solo quita los espacio de la izquierda y Rtrim solo quita los espacios de derecha
/* $texto = "  Hola Mundo! ";
echo "Caracteres: " .strlen($texto) ."<br>";
echo "TRIM: " .trim($texto) ." (" .strlen(trim($texto)) .")<br>";
echo "LTRIM: " .ltrim($texto) ." (" .strlen(ltrim($texto)) .")<br>";
echo "RTRIM: " .rtrim($texto) ." (" .strlen(rtrim($texto)) .")<br>"; */


// Round => Redondeo
/* $valor = 98.72;
echo round($valor) ."<br>"; // Redondeo
echo ceil($valor) ."<br>"; // Redondeo para arriba
echo floor($valor) ."<br>"; // Redondeo para abajo */



// Números
// Random => Generar número aleatorios
/* $numero = rand(0000000000, 9999999999999999);
echo $numero ." " .strlen($numero);

$num1 = rand(0000, 9999);
$num2 = rand(0000, 9999);
$num3 = rand(0000, 9999);
$num4 = rand(0000, 9999);
?>
<input type="text" value="<?php echo $num1; ?>" size="4">
<input type="text" value="<?php echo $num2; ?>" size="4">
<input type="text" value="<?php echo $num3; ?>" size="4">
<input type="text" value="<?php echo $num4; ?>" size="4"> */


// Funciones para el manejo de datos
/* $valor = 10.6;
$salida = intval($valor); //Convierte a entero
var_dump($salida); */

/* $valor = "10.6";
$salida = floatval($valor); //Convierte a flotante (números con decimales)
var_dump($salida); */

/* $valor = 10.6;
$salida = strval($valor); //Convierte cualquier tipo de dato a string
var_dump($salida); */

/* $valor = null;
$salida = boolval($valor); //Convierte un dato a booleano
var_dump($salida); */

/* $valor = "pepe";
if (isset($valor)) { // Valida si una variable fue declarada
    echo "Existe la variable valor";
} else {
    echo "No existe la variable valor";
} */

/* $valor = "Pepe";
$lista = ["Juan", "Pedro", "María"];
unset($valor); //Destruye la variable especificada
unset($lista);
echo $valor;
print_r($lista); */

/* $valor = 10;
// Valido si es un número
if (is_numeric($valor)) {
    echo "Es un valor numérico!";
} else {
    echo "No! No es un valor numérico!";
}

echo "<br>";

// Valido si es un entero
if (is_integer($valor)) {
    echo "Es un valor entero!";
} else {
    echo "No! No es un valor entero!";
}

echo "<br>";

// Valido si es un decimal
if (is_float($valor)) {
    echo "Es un valor decimal!";
} else {
    echo "No! No es un valor decimal!";
} */

//$lista = ["Juan", "Pedro", "María"];
/* $lista = "Juan";
print_r($lista);

if (is_array($lista)) {
    echo "<br>Lista, si es un array!";
} else {
    echo "<br>Lista, no es un array!";
} */

/* $valor = "";
echo $valor ."<br>";
if (empty($valor)) {
    echo "La variable está vacía!";
} else {
    echo "La variable NO está vacía!";
} */