<?php
//require_once './app/productos_controller.php';
//require_once './app/productos_controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la action desde el paramtro "action"

$action = 'hogar'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

/*TABLA DE ROUTEO:
    ACCION              
    listar global     ->    mostrarProductos();
    listar individual ->    mostrarProductos($id)
    agregar           ->    agregarProducto();
    eliminar/:ID      ->    removerProducto($id); 
    modificar/:ID     ->    modificarProducto($id);
*/

$params = explode('/', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'hogar':
        mostrarDB(); // muestra todas los productos
        break;

    case 'producto':
        mostrarProductos($params[1]); // muestra un producto
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