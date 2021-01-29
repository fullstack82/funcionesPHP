<?php
// Funciones en PHP

function muestraNombres(){
    echo "maria <br/>";
    echo "maria <br/>";
    echo "maria <br/>";
    echo "<hr/>";
}

muestraNombres();
muestraNombres();
muestraNombres();




// Ejemplo 2 ;

$numero = 5;

function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero </h3>";

    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
}

}
tabla(568);

?>