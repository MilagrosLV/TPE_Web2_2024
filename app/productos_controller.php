<?php
require_once 'app/productos_view.php';
require_once 'app/productos_model.php';


function mostrarDB(){
    $productos = getProductos();
    mostrarHome($productos);
   
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

