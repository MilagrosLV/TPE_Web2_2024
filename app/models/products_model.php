<?php
require_once 'app/controllers/products_controller.php';

class products_model {
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

        
    public function getProducts(){
            $query =  $this->db->prepare('SELECT * FROM productos');
            $query->execute();
            $products = $query->fetchAll(PDO::FETCH_OBJ);
            return $products;
    }
        
    public function getProduct($id){
        $query = $this->db->prepare('SELECT * FROM productos WHERE id = ?');
        $query->execute([$id]);
        return $id;
    }
         
    public function getProductsByCategory($category){
        $query = $this->db->prepare('SELECT * FROM productos WHERE categoria = ?');
        $query->execute([$category]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);        
        return $products;
    }
        
    public function insertProduct($name, $price, $category){
        $query = $this->db->prepare('INSERT INTO productos(nombre, precio, categoria) VALUES (?, ?, ?)');
        $query->execute([$name, $price, $category]);   
        return $this->db->lastInsertId();
    }
        
    public function deleteProduct($id){
        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }
        
    public function updateProduct($name, $price, $category, $id){
        $query = $this->db->prepare('UPDATE productos SET nombre=?, precio=?, categoria=? WHERE id= ?');
        $result = $query->execute([$name, $price, $category, $id]);
        return $result;   
    }
}


