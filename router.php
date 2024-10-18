<?php
require_once './app/productos_controller.php';
require_once './usuario/usuarioControler.php';
require_once './utilidades/response.php';
require_once './utilidades/mediador.php';

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

function show404() {
    // Puedes agregar un mensaje de error o redireccionar a una página de error.
    header("HTTP/1.0 404 Not Found");
    echo "404 - Página no encontrada";
    exit(); // Detiene la ejecución del script
}

switch ($params[0]) { // en la primer posicion tengo la accion real

    case 'home':
        sessionAuth($res);
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
        
    case 'modificar':
        sessionAuth($res);
        modificarProducto($params[1]);
        break;
    
    case 'actualizar':
        sessionAuth($res);
        actualizarProducto($params[1]);
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
        mostrarError();
        break;
}