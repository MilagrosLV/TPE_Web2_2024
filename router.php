<?php
//require_once './app/productos_controller.php';
//require_once './app/productos_controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la accion desde el paramtro "accion"

$accion = 'hogar'; // accion por defecto
if ((isset( $_GET['accion'])) && (!empty( $_GET['accion']))) {
    $accion = $_GET['accion'];
}

/*TABLA DE ROUTEO:
    ACCION              
    listar global     ->    mostrarProductos();
    listar individual ->    mostrarProductos($id)
    agregar           ->    agregarProducto();
    eliminar/:ID      ->    removerProducto($id); 
    modificar/:ID     ->    modificarProducto($id);
*/

$params = explode('/', $accion);

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'hogar':
        mostrarProductos(); // muestra todas los productos
        break;

    case 'producto':
        if (isset($params[1])) {
            mostrarUnProducto($params[1]); // muestra un producto
        } else {
            mostrarProductos(); // muestra todas los productos
        }
        break;

    case 'agregar':
        agregarProducto();
        break;

    case 'eliminar':
        removerProducto($params[1]);
        break;
        
    /*case 'modificar':
        modificarProductos($params[1]);
        break;
        */
    default: 
        mostrarError();
        break;
}