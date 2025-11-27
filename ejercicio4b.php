<?php

// clase de modelo
class Producto {

    // propiedades:
    public $producto;
    public $cantidad;
    public $precio;

    
}

$producto1 = new Producto();
$producto1->producto = "cocacola";
$producto1->cantidad = 5;
$producto1->precio = 2500;

$producto2=[
    'producto'=>'cocacola',
    'cantidad'=>5,
    'precio'=>2500
];
