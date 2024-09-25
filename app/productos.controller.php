<?php
require_once './productos.view.php';
require_once './productos.model.php';

function showProductos(){
    //Verificar datos obligatorios
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

