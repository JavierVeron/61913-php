<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase 3 - Educación IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php
    // Declarando un Array
    $miArray1 = array(10, 20, 30, 40, 50);
    $miArray2 = array("Javier", "Pedro", "Maria", "Juan");

    // Imprimiendo Arrays
    /* print_r($miArray1) ."<br>";
    print_r($miArray2) ."<br>"; */

    // Acceder a los Valores
    /* echo "<p>Mi nombre es <b>" .$miArray2[2] ."</b> y mi edad es <b>" .$miArray1[1] ."</b></p>";
    echo "<p>Mi nombre es <b>" .$miArray2[4] ."</b> y mi edad es <b>" .$miArray1[10] ."</b></p>"; */

    // Declarando un Array Asociativo
    //$arrayAsociativo = ["nombre" => "Javier", "apellido" => "Verón", "edad" => 41]; //Es un tipo de dato Array
    //print_r($arrayAsociativo);
    /* echo "<p>Mi nombre es <b>" .$arrayAsociativo["nombre"] ." " .$arrayAsociativo["apellido"] ."</b> y mi edad es <b>" .$arrayAsociativo["edad"] ."</b></p>";
    echo "<p>Mi nombre es <b>" .$arrayAsociativo["nombres"] ." " .$arrayAsociativo["apellidos"] ."</b> y mi edad es <b>" .$arrayAsociativo["edades"] ."</b></p>"; */
    //echo $arrayAsociativo;

    // Declarar un Array de Array
    $miArray = [
        ["nombre" => "Lionel", "apellido" => "Scaloni", "edad" => 42, "hijos" => []],
        ["nombre" => "Javier", "apellido" => "Verón", "edad" => 41, "hijos" => []],
        ["nombre" => "Juan", "apellido" => "Perez", "edad" => 50 , "hijos" => [
            ["nombre" => "Matias", "edad" => 10],
            ["nombre" => "Lucia", "edad" => 9]
        ]],
        ["nombre" => "Lionel", "apellido" => "Messi", "edad" => 35, "hijos" => [
            ["nombre" => "Thiago", "edad" => 10],
            ["nombre" => "Ciro", "edad" => 9],
            ["nombre" => "Mateo", "edad" => 8]
        ]]
    ];

    //print_r($miArray);
    /* echo "<h3>" .$miArray[2]["nombre"] ." " .$miArray[2]["apellido"] ."</h3>";
    echo "<h3>" .$miArray[1]["nombre"] ." " .$miArray[1]["apellido"] ."</h3>";
    echo "<p>Hijos de " .$miArray[1]["nombre"] ."</p>";
    echo "<p>" .$miArray[1]["hijos"][0]["nombre"] ." (" .$miArray[1]["hijos"][0]["edad"] .")</p>";
    echo "<p>" .$miArray[1]["hijos"][1]["nombre"] ." (" .$miArray[1]["hijos"][1]["edad"] .")</p>"; */

    // Recorriendo Arrays
    /* $totalArray = count($miArray); //3

    for ($i=0; $i<$totalArray; $i++) {
        echo "<p>Nombre: <b>" .$miArray[$i]["nombre"] ."</b> - Apellido: <b>" .$miArray[$i]["apellido"] ."</b></p>";
        $totalHijos = count($miArray[$i]["hijos"]);

        for ($j=0; $j<$totalHijos; $j++) {
            echo "<p>-->Nombre: <b>" .$miArray[$i]["hijos"][$j]["nombre"] ." (" .$miArray[$i]["hijos"][$j]["edad"] .")</b></p>";
        }
    } */

    // Ejemplo de Edades
    /* $edades = [20, 30, 45];

    for ($i=0; $i<count($edades); $i++) {
        echo $edades[$i] ."-";
    } */



    // Operaciones con Arrays
    // Var_dump
    //var_dump($miArray);

    // Agregando nuevos Elementos al Array #1
    /* $miArray[] = ["nombre" => "Enzo", "apellido" => "Fernández", "edad" => 21, "hijos" => []];
    print_r($miArray); */
    // Agregando nuevos Elementos al Array #2 con la función array_push
    /* array_push($miArray, ["nombre" => "Alexis", "apellido" => "MacAllister", "edad" => 22, "hijos" => []]);
    print_r($miArray); */

    // Validando si existe un Clave o Variable con isset()
    /* if (isset($miArray[0]["apellido"])) {
        echo "Existe! " .$miArray[0]["apellido"];
    } else {
        echo "No existe la Clave en el Array!";
    } */

    // Count devuelve la cantidad de elementos de un array
    //echo count($miArray);

    // Validando datos con in_array()
    $edades = [60, 25, 10, 20, 34, 50];

    /* if (in_array(41, $miArray)) {
        echo "Existe!";
    } else {
        echo "No, existe!";
    } */

    // array_search() devuelve la posición donde se encuentra el elemento
    /* $posicion = array_search(50, $edades);

    if ($posicion) {
        echo "El elemento se encuentra en la posición: " .$posicion;
    } else {
        echo "No se encuentra el elemento!";
    } */

    // Key_exists() Valida si existe la clave

    /* if (isset($pepe)) {
        echo "Existe pepe!";
    } else {
        echo "No Existe pepe!";
    } */

    /* if (key_exists("nietos", $miArray[0])) {
        echo "Existe!";
    } else {
        echo "No, existe!";
    } */
    
    // Array_pop nos extrea el último elemento del array (lo quita)
    /* $ultimoValor = array_pop($miArray);
    //print_r($ultimoValor);
    print_r($miArray); */

    // Implode convierte un array en string utilizando un caracter de concatenación
    /* $edadesString = implode("/", $edades);
    echo $edadesString; */

    // Explode convierte un string a un array, utilizando un caracter de separación
    /* $texto = "Hola soy Javier";
    $textoExplode = explode(" ", $texto);
    print_r($textoExplode); */

    // Ordenando arrays con sort() y rsort()
    /* print_r($edades);
    echo "<br><br>";
    sort($edades);
    print_r($edades);
    echo "<br><br>";
    rsort($edades);
    print_r($edades); */

    // Ordenando arrays asociativos con asort() y arsort()
    /* print_r($miArray);
    echo "<br><br>";
    asort($miArray);
    print_r($miArray);
    echo "<br><br>";
    arsort($miArray);
    print_r($miArray); */


    // Foreach con array
    /* $nombres = ["Juan", "Pedro", "Carla", "María"];

    foreach($nombres as $nombre) {
        echo $nombre ."<br>";
    } */

    // Foreach con arrays asociativos
    //$miArray2 = ["nombre" => "Lionel", "apellido" => "Scaloni", "edad" => 42, "hijos" => []];
        
    /* foreach($miArray as $array) {
        foreach($array as $clave => $valor) {
            if (!is_array($valor)) {
                echo $clave ." - " .$valor ."<br>";
            }
        }
    } */

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>