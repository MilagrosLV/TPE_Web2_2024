<?php
require_once 'app/productos_controller.php';

function conexionDb(){
$db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
   return $db;
}

function getProductos(){
    $db = conexionDb();
    $query =  $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}

function obtenerProductosPorCategoria($categoria){
    $db = conexionDb();
    $query = $db->prepare('SELECT * FROM productos WHERE categoria = ?');
    $query->execute([$categoria]);
    $productos = $query->fetchAll(PDO::FETCH_OBJ);

    return $productos;
}

function insertarProducto($nombre, $precio, $categoria){
    $db= conexionDb();
    $query = $db->prepare('INSERT INTO productos (nombre, precio, categoria) VALUES (?,?,?)');
    $query->execute([$nombre, $precio, $categoria]);

    return $db->lastInsertId();
}

function eliminarProducto($id){
    $db = conexionDb();
    $query = $db->prepare('DELETE FROM `productos` WHERE id=?');
    $query->execute([$id]);
}

function actualizarProducto($nombre, $precio, $categoria, $id){
    $db= conexionDb();
    $query = $db->prepare('UPDATE productos SET nombre=?, precio=?,categoria=? WHERE id= ?');
    $resultado =$query->execute([$nombre, $precio, $categoria,$id]);
    return $resultado;
  
}
