<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row my-5">
            <div class="col">
                <?php
                //Condicionales
                $numero1 = 50;
                $numero2 = 50;

                // Estructura IF
                /* if ($numero1 > $numero2) {
                    echo '<div class="alert alert-primary" role="alert">El número 1 es mayor que 2!</div>';
                } */

                // Estructura ELSE IF
                /* if ($numero1 > $numero2) {
                    echo '<div class="alert alert-success" role="alert">El número 1 es mayor que 2!</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">El número 1 NO ES MAYOR que 2!</div>';
                } */

                // Estructura IF ELSE IF
                /* if ($numero1 > $numero2) {
                    echo '<div class="alert alert-success" role="alert">El número 1 es mayor que 2!</div>';
                } else if ($numero1 < $numero2) {
                    echo '<div class="alert alert-danger" role="alert">El número 1 NO ES MAYOR que 2!</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">El número 1 ES IGUAL que 2!</div>';
                } */

                // Ejemplo de IMC
                //$altura = 176;
                //$peso = 82;
                ?>
                <!-- <h1>Calculadora de IMC</h1>
                <form method="post" action="calcularIMC.php">
                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura:</label>
                        <input type="number" class="form-control" id="altura" name="altura" value="<?php //echo $altura; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso:</label>
                        <input type="number" class="form-control" id="peso" name="peso" value="<?php //echo $peso; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form> -->

                <?php
                // Switch
                /* $operacion = "sumar";
                $numero1 = 20;
                $numero2 = 20;
                $resultado = 0;
                $opValida = false;

                switch($operacion) {
                    case "sumar":
                        $resultado = $numero1 + $numero2;
                        $opValida = true;
                        break;
                    case "restar":
                        $resultado = $numero1 - $numero2;
                        $opValida = true;
                        break;
                    case "multiplicar":
                        $resultado = $numero1 * $numero2;
                        $opValida = true;
                        break;
                    case "division":
                        $resultado = $numero1 / $numero2;
                        $opValida = true;
                        break;
                    default:
                        echo "<p>Operación INVÁLIDA!</p>";
                        $opValida = false;
                        break;
                }

                if ($opValida) {
                    echo "<p>" .$resultado ." - Operación: <strong>" .$operacion ."</strong></p>";
                } */



                // Bucles
                /* $valor = 1;
                echo "<p>Hola #" .$valor ."</p>";
                $valor++;
                echo "<p>Hola #" .$valor ."</p>";
                $valor++;
                echo "<p>Hola #" .$valor ."</p>";
                $valor++; */

                // While
                /* $contador = 100;
                
                while ($contador <= 10) {
                    echo '<div class="alert alert-success" role="alert">Contador #' .$contador .'</div>';
                    $contador++;

                    //if ($contador == 5) {
                        //echo '<div class="alert alert-warning" role="alert">Cortamos acá!</div>';
                        //$contador = 1000;
                        //break; //Cortar la ejecución del While
                        //continue; //Continua a la siguiente iteración del While
                    //}
                }

                echo '<div class="alert alert-danger" role="alert">Bucle Terminado!</div>'; */


                // Do While
                /* $contador = 10;

                do {
                    echo '<div class="alert alert-warning" role="alert">Este código se ejecuta al menos una vez!</div>';
                } while ($contador < 10);
                    echo '<div class="alert alert-warning" role="alert">Contador #' .$contador .'</div>'; */


                // For
                for ($i=0; $i<10; $i++) { //Se repite del 0 al 9
                    echo '<div class="alert alert-success" role="alert">Contador ' .$i .'</div>';

                    if ($i == 6) {
                        break;
                    }
                }

                for ($i=1; $i<=10; $i++) { //Se repite del 1 al 10
                    echo '<div class="alert alert-warning" role="alert">Contador ' .$i .'</div>';
                }

                echo '<div class="alert alert-danger" role="alert">Bucle Terminado!</div>';

                






                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


