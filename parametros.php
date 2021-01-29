<?php
// Parametros opcionales;
function calculadora($numero1, $numero2, $negrita = false)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    if ($negrita) {
        echo "<h1>";
    }



    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicación: $multi <br/>";
    echo "División: $division <br/>";

    if ($negrita) {
        echo "</h1>";
    }

    echo "<hr/>";
}

calculadora(10, 20);
calculadora(45, 80);
calculadora(1085, 2960, true);  // Invocamos el tercer parametro
calculadora(1048, 7970);
