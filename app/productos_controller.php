<?php
require_once 'app/productos_view.php';
require_once 'app/productos_model.php';


function mostrarDB(){
    $productos = getProductos();
    mostrarHogar($productos);
   
}

function showProductos(){
    //Verificar datos obligatorios y valida la entrada de usuarios
    if ((!isset($_GET['Categoria'])) || empty($_GET['Categoria'])) {
        mostrarError('Categoría no especificada');
        return;
    }

    //Obtiene la categoria enciada por GET
    $categoria = $_GET['Categoria'];

    //Llama al model para obtener los productos
    $productos = obtenerProductosPorCategoria($categoria);

    mostrarProductos($productos, $categoria);
}

function addProducto(){

    if ((!isset($_POST['nombre']))) {
        mostrarError('Nombre no especificado');
    }

    if ((!isset($_POST['precio']))) {
        mostrarError('Precio no especificado');
    }

    if ((!isset($_POST['categoria']))) {
        mostrarError('Categoría no especificada');
    }

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];

    $id = insertarProducto($nombre, $precio, $categoria);

    if ($id) {
        header('Location: ' . BASE_URL);
    } else {
        echo"error al insertar la tarea";
    }
}

function  removerPdroducto($id){
    eliminarProducto($id);
    header('Location: ' . BASE_URL);
}

