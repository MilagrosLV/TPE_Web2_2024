<?php
require_once 'app/productos_controller.php';

function coneccionDb(){
$db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
   return $db;
}

function buscarProductos(){
    $db = coneccionDb();
    $query =  $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}

/*function buscarProducto($nombre){
    $db = coneccionDb();
    $query = $db->prepare("SELECT * FROM productos WHERE nombre = ?");
    $query->execute([$nombre]);
    return $nombre;
}*/

function obtenerProductosPorCategoria($categoria){
    $db = coneccionDb();
    $query = $db->prepare('SELECT * FROM productos WHERE categoria = ?');
    $query->execute([$categoria]);
    $productos = $query->fetchAll(PDO::FETCH_OBJ);

    return $productos;
}

function insertarProducto($nombre, $precio, $categoria){
    $db= coneccionDb();
    $query = $db->prepare('INSERT INTO productos (nombre, precio, categoria) VALUES (?,?,?)');
    $query->execute([$nombre, $precio, $categoria]);

    return $db->lastInsertId();
}

function eliminarProducto($id){
    $db = coneccionDb();
    $query = $db->prepare('DELETE FROM `productos` WHERE id=?');
    $query->execute([$id]);
}

