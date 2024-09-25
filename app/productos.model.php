<?php
require_once './productos.controller.php';

function obtenerProductosPorCategoria($categoria){
    $db = new PDO('mysql:host=localhost;' . 'dbname=supermercado;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM productos WHERE Categoria = ?');
    $query->execute([$categoria]);
    $productos = $query->fetchAll(PDO::FETCH_OBJ);

    return $productos;
}