<?php
require_once './app/productos_controller.php';
require_once './usuario/usuarioControler.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la action desde el paramtro "action"

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->        mostrarProductos();
// listar individual ->mostrarProducto($id)
// agregar   ->        addProducto();
// eliminar/:ID  ->    removerPdroducto($id); 
// modificar/:ID  ->   modificarProducto($id);

$params = explode('/', $action);

function show404() {
    // Puedes agregar un mensaje de error o redireccionar a una página de error.
    header("HTTP/1.0 404 Not Found");
    echo "404 - Página no encontrada";
    exit(); // Detiene la ejecución del script
}

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'home':
        mostrarDB(); // muestra todas los productos
        break;

    case 'producto':
        mostrarProducto($params[1]); // muestra un producto
        break;

    case 'agregar':
        addProducto();
        break;

    case 'eliminar':
        removerPdroducto($params[1]);
        break;
        
    case 'modificar':
        modificarProducto($params[1]);
        break;
    
    case 'actualizar':
        actualizarProducto($params[1]);
        break;

    case 'mostrarLogin':
        $controler = new controlUsuario();
        $controler->mostrarLogin();
        break;
    
    case 'login':
        $controler = new controlUsuario();
        $controler->login();
        break;

    default: 
        show404();
        break;
}