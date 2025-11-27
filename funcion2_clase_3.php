<?php

// clase de modelo => campos 
// clase de modelo => usualmente son las tablas de la base de datos.
class Producto {
    public $nombre;
    public $precio;
}

// clase de servicio => funciones.
class ProductoServicio {
    function mostrar(Producto $producto) {
        echo "<hr>";
        echo "{$producto->nombre} {$producto->precio}";
        echo "<hr>";
    }
}

$prod=new Producto();
$prod->nombre= "cocacola";
$prod->precio= 1500;

$prodSrv=new ProductoServicio();
$prodSrv->mostrar($prod);


