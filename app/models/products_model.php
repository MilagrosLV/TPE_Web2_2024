<?php
require_once 'app/controllers/products_controller.php';

function conexionDb(){
$db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
   return $db;
}

function getProducts(){
    $db = conexionDb();
    $query =  $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}

/*function buscarProducto($name){
    $db = conexionDb();
    $query = $db->prepare("SELECT * FROM productos WHERE nombre = ?");
    $query->execute([$name]);
    return $name;
}*/
 
function getProductsByCategory($category){
    $db = conexionDb();
    $query = $db->prepare('SELECT * FROM productos WHERE categoria = ?');
    $query->execute([$category]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);

    return $products;
}

function addProduct($name, $price, $category){
    $db= conexionDb();
    $query = $db->prepare('INSERT INTO productos (nombre, precio, categoria) VALUES (?,?,?)');
    $query->execute([$name, $price, $category]);

    return $db->lastInsertId();
}

function deleteProduct($id){
    $db = conexionDb();
    $query = $db->prepare('DELETE FROM `productos` WHERE id=?');
    $query->execute([$id]);
}

function updateProduct($name, $price, $category, $id){
    $db= conexionDb();
    $query = $db->prepare('UPDATE productos SET nombre=?, precio=?,categoria=? WHERE id= ?');
    $resultado =$query->execute([$name, $price, $category, $id]);
    return $resultado;
  
}
