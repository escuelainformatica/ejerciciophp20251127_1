<?php
include "modelo/Producto.php";
include "servicio/ProductoSrv.php";

$prod=new Producto();
$prod->nombre="fanta";
$prod->precio=2500;

$ps=new ProductoServicio();
$ps->mostrar($prod);