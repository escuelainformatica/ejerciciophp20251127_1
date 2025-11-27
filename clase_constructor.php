<?php

class Producto {
    public $id;
    public $nombre;
    public $precio;
    public $cantidad;

    // constructor
    public function __construct($id, $nombre, $precio, $cantidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }
}
$produ=new Producto(1,"cocacola",2500,3);

class Cliente {
    public $nombre;
    public $apellido;
    public $correo;
    public $direccion;
    public function __construct($nombre, $apellido, $correo, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->direccion = $direccion;
    }    
}
$john=new Cliente("john","doe","john@doe.com","sunset blv #2576");