<?php

// Esta clase que tienen campos / metodos = clase de dominio.
class Producto {
    // campos / propiedades:
    public string $nombre;
    public int $precio;

    // metodo / funcion:
    function obtenerIVA():float {
        // this indica el objeto actual
        return $this->precio*1.19;
    }
}

$producto = new Producto();
$producto->nombre = "cocacola";
$producto->precio = 1500;



var_dump($producto->obtenerIVA());
