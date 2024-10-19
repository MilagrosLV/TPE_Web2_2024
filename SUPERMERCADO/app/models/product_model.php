<?php
class productModel {
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    public function getProducts() {
        $query =  $this->db->prepare('SELECT * FROM productos');
        $query->execute();
        $all_products = $query->fetchAll(PDO::FETCH_OBJ);
        return $all_products;
    }

    public function getProduct($id) {
        $query = $this->db->prepare('SELECT * FROM productos WHERE id_producto = ?');
        $query->execute([$id]);
        $id = $query->fetch(PDO::FETCH_OBJ);
        return $id;
    }

    public function getSelect(){
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertProduct($name, $price, $category){
        $query = $this->db->prepare('INSERT INTO productos (nombre_producto, precio_producto, id_categoria) VALUES (?, ?, ?)');
        $query->execute([$name, $price, $category]);   
        return $this->db->lastInsertId();
    }
    
    public function updateProduct($name, $price, $category, $id){
        $query = $this->db->prepare('UPDATE productos SET nombre=?, precio=?, categoria=? WHERE id= ?');
        $result = $query->execute([$name, $price, $category, $id]);
        return $result;   
    }

    public function deleteProduct($id){
        $query = $this->db->prepare('DELETE FROM productos WHERE id_producto = ?');
        $query->execute([$id]);
    }
}
?>