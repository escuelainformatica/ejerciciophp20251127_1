# nombreclatura de nombres.

## variables
* deben partir en minuscula y no ocupar caracteres especiales ("_")
* Ejemplo: $cliente, $proveedor, $ordenCompra
* Las variables deben tener nombre de cosas, objetos o propiedades.
## funciones
* al igual que las variables, deben partir en minuscula.
* Ejemplo: mostrar(), insertar(), obtenerIVA()
* Las funciones son verbos o acciones
## clases
* Deben partir en mayuscula.
* Ejemplo: Cliente, Proveedor, etc.
* Las clases comunmente indican un tabla de la base de datos.
* Las clases pueden tener postfijos.
* Seria conveniente no repetir el nombre de las clases.
* Ejemplo: si tengo una tabla llamada Clientes
* La clase de modelo: Cliente
* La clase de servicio: ClienteServicio

# definir una funcion
```php
    function nombrefuncion($arg,$arg2) {
        // opcionalmente: return si quiero que regrese un valor
    }
    function sumar($num1,$num2) {
        return $num1+$num2;
    }
    // type hinting
    function sumar(int $num1,int $num2):int {
        return $num1+$num2;
    }
```
# crear un objeto
Un objeto es una variable definida por una clase

```php
class Clase1 {
    // campo
    public $campo1;
    // metodo
    public function fn1() {}
}
$obj=new Clase1();
$obj->campo1="hola";
$obj->fn1();
```
