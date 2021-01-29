<?php
// Ejemplo 4 : Llamar a dos funciones desde otra función;

function getNombre($nombre)
{
    $texto = "El nombre es: $nombre";
    return $texto;
};

function getApellidos($apellidos)
{
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}


function devuelveNombre($nombre, $apellidos)
{
    $texto = getNombre($nombre)
        . "<br/>" .
        getApellidos($apellidos);
    return $texto;
}


echo devuelveNombre("maria", "pinto");
