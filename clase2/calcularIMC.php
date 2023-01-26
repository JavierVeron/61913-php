<?php
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$imc = ($peso / ($altura * $altura)) * 10000;

if ($imc < 18.5) {
    echo "Peso inferior al normal";
} else if (($imc >= 18.5) && ($imc <= 24.9)) {
    echo "Normal";
} else if (($imc >= 25) && ($imc <= 29.9)) {
    echo "Peso superior al normal";
} else {
    echo "Obesidad";
}

?>