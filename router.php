<?php
require_once './app/controllers/productos_controller.php';
require_once './app/controllers/usuario_controller.php';
require_once './libs/response.php';
require_once './app/intermedios/mediador.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$res = new Response();

// el router va a leer la action desde el paramtro "action"

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
        //sessionAuth($res);
        mostrarDB(); // muestra todas los productos
        break;

    case 'producto':
        if (isset($params[1])) {
            mostrarUnProducto($params[1]); // muestra un producto
        } else {
            mostrarDB(); // muestra todas los productos
        }
        break;

    case 'agregar':
        sessionAuth($res);
        agregarProducto();
        break;

    case 'eliminar':
        sessionAuth($res);
        removerProducto($params[1]);
        break;
        
    
    case 'mostrarLogin':
        $controller = new controlUsuario();
        $controller->mostrarLogin();
        break;
    
    case 'login':
        $controller = new controlUsuario();
        $controller->login();
        break;

    case 'desloguear':
        $controller = new controlUsuario();
        $controller->desloguear();
        break;

    default: 
        echo "Error router.";
        break;
}