<?php

// 1) las clases deben partir en mayusculas.
// Cliente = OK
// cliente = NO OK.

class Cliente {
    // campos:
    public $rut;
    public $nombre;
    public $apellido;
    public $telefono;    
}

// definir una variable para que use esa clase.
// una variable definida por una clase se llama "objeto"

$john=new Cliente();
$john->nombre="John";
$john->apellido= "Doe";
$john->telefono= "255-33333";

echo "{$john->nombre} {$john->apellido} {$john->telefono}<br>";
var_dump($john);

