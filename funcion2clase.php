<?php

class Producto {
    public string $nombre;
    public int $precio;
}

$producto = new Producto();
$producto->nombre = "cocacola";
$producto->precio = 1500;

function obtenerIVA(Producto $producto):float {
    return $producto->precio*1.19;
}

var_dump(obtenerIVA($producto));
