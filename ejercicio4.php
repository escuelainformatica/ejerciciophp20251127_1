<?php

$producto1=[
    'producto'=>'Cocacola',
    'cantidad'=>3,
    'precio'=>1500
];
$producto2=[
    'producto'=>'fanta',
    'cantidad'=>2,
    'precio'=>2000
];
$producto3=[
    'producto'=>'sprite',
    'cantidad'=>1,
    'precio'=>2300
];

$subtotal=$producto1['cantidad']*$producto1['precio']+
    $producto2['cantidad']*$producto2['precio']+
    $producto3['cantidad']*$producto3['precio'];

echo "el subtotal es $subtotal";
