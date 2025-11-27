<?php
// las funciones se escriben igual que las variables.

function sumarvalores(int $num1,int $num2):int{
    return $num1 + $num2;
}

var_dump(sumarvalores(1,2));

function mostrar(array $cliente):void {
    echo "<hr>";
    echo "<b>Nombre:</b>{$cliente['nombre']}, <b>Apellido:</b>{$cliente['apellido']}";
    echo "<hr>";
}

$cli=['nombre'=>'john','apellido'=>'doe'];
mostrar($cli);


//$cli2=200;
//mostrar($cli2);
