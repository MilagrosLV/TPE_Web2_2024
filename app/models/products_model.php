<?php
require_once 'app/controllers/products_controller.php';

class products_model {
    private $db;

    public function __construc(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

        
    public function getProducts(){
            $query =  $query = $this->db->prepare('SELECT * FROM productos');
            $query->execute();
            $productos = $query->fetchAll(PDO::FETCH_OBJ);
            return $productos;
    }
        
        /*public function getProduct($name){
            $query = $this->db->prepare("SELECT * FROM productos WHERE nombre = ?");
            $query->execute([$name]);
            return $name;
        }*/
         
    public function getProductsByCategory($category){
            $query = $this->db->prepare('SELECT * FROM productos WHERE categoria = ?');
            $query->execute([$category]);
            $products = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $products;
    }
        
    public function addProduct($name, $price, $category){
            $query = $this->db->prepare('INSERT INTO productos (nombre, precio, categoria) VALUES (?,?,?)');
            $query->execute([$name, $price, $category]);
        
            return $$this->db->lastInsertId();
    }
        
    public function deleteProduct($id){
            $query = $this->db->prepare('DELETE FROM `productos` WHERE id=?');
            $query->execute([$id]);
    }
        
    public function updateProduct($name, $price, $category, $id){
            $query = $this->db->prepare('UPDATE productos SET nombre=?, precio=?,categoria=? WHERE id= ?');
            $result = $query->execute([$name, $price, $category, $id]);
            return $result;
          
    }
}


