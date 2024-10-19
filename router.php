<?php
require_once './app/controllers/products_controller.php';
//require_once './app/controllers/user_controller.php';
//require_once './libs/response.php';
//require_once './app/intermedios/mediador.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//$res = new response();

// el router va a leer la accion desde el parametro "action"

$action = 'home'; // accion por defecto
if ((isset( $_GET['accion'])) && (!empty( $_GET['accion']))) {
    $acion = $_GET['accion'];
}

/*TABLA DE ROUTEO:
    ACCION              
    home     ->    showProducts();
    product ->    showProduct($id)
    add           ->    addProduct();
    delete/:ID      ->    removerProducto($id); 
    update/:ID     ->    modificarProducto($id);
*/

$params = explode('/', $action);


switch ($params[0]) { // en la primer posicion tengo la accion real

    case 'home':
        //sessionAuth($res);
        $controller = new products_controller();
        $controller->showProducts(); // muestra todas los productos
        break;

    case 'product':
        $controller = new products_controller();
        if ((isset($params[1]))&&(!empty($params[1]))) {
            $controller->showProduct($params[1]); // muestra un producto
        } else {
            $controller->showProducts(); // muestra todas los productos
        }
        break;

    case 'add':
        //sessionAuth($res);
        $controller = new products_controller();
        $controller->addProduct();
        break;

    case 'delete':
        $controller = new products_controller();
        //sessionAuth($res);
        $controller->removerProducto($params[1]);
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