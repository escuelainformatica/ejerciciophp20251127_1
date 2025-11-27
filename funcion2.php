<?php
// variable: minuscula, elemento (algo).
$producto=['nombre'=>'cocacola','precio'=>1510];

// quiero hacer una funcion que calcule el precio con iva.
// Las funciones son verbos o acciones.
// int = entero.
// string = texto
// array = arreglo
// float = numero decimal
// bool = booleano
// null = nulo
// object = objeto (se usa en nombre de la clase)
// void = nada.
// mixed = cualquier tipo de datos


function obtenerIVA(array $datos):float {
    return $datos['precio']*1.19;
}

var_dump(obtenerIVA($producto));
