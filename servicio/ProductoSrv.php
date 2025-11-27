<?php
class ProductoServicio {
    function mostrar(Producto $producto) {
        echo "<hr>";
        echo "{$producto->nombre} {$producto->precio}";
        echo "<hr>";
    }
}
