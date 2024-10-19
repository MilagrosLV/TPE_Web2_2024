<?php
require_once './app/controllers/products_controller.php';
require_once './app/controllers/usuario_controller.php';
//require_once './libs/response.php';
//require_once './app/intermedios/mediador.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//$res = new response();

// el router va a leer la action desde el paramtro "action"

$accion = 'hogar'; // accion por defecto
if ((isset( $_GET['accion'])) && (!empty( $_GET['accion']))) {
    $accion = $_GET['accion'];
}

/*TABLA DE ROUTEO:
    ACCION              
    listar global     ->    showProductos();
    listar individual ->    showProductos($id)
    agregar           ->    agregarProducto();
    eliminar/:ID      ->    removerProducto($id); 
    modificar/:ID     ->    modificarProducto($id);
*/

$params = explode('/', $accion);


switch ($params[0]) { // en la primer posicion tengo la accion real

    case 'home':
        //sessionAuth($res);
        showDB(); // muestra todas los productos
        break;

    case 'product':
        if (isset($params[1])) {
            showProduct($params[1]); // muestra un producto
        } else {
            showDB(); // muestra todas los productos
        }
        break;

    case 'add':
        sessionAuth($res);
        addProduct();
        break;

    case 'delete':
        sessionAuth($res);
        removerProducto($params[1]);
        break;
        
    
    case 'showLogin':
        $controller = new user_controller();
        $controller->showLogin();
        break;
    
    case 'login':
        $controller = new user_controller();
        $controller->logIn();
        break;

    case 'logout':
        $controller = new user_controller();
        $controller->logOut();
        break;

    default: 
        echo "Error router.";
        break;
}