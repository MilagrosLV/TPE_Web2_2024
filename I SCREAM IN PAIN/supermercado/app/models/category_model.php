<?php
class CategoryModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=rolling_stones;charset=utf8', 'root', '');
    }

    public function getAllCategories(){
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);        
        return $categories;
    }

    public function getOneCategory($id){
        $query = $this->db->prepare('SELECT * FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getProductByCategoryID($id_category){
        $query=$this->db->prepare('SELECT * FROM `productos` INNER JOIN categorias on productos.id_categoria=categorias.id_categoria WHERE categorias.id_categoria=?');
        $query->execute(array($id_category));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function insertCategory($category_name){
        $query = $this->db->prepare("INSERT INTO `categorias`  ( `nombre_categoria` ) VALUES (?)");
        $query->execute([$category_name]);
        return $this->db->lastInsertId();
    }
    public function deleteCategoryById($id){
        $query=$this->db->prepare("DELETE from `categorias` WHERE id_categoria= ? ");
        $query2=$this->db->prepare("DELETE from `productos` WHERE id_categoria= ? ");
        $query->execute([$id]);
        $query2->execute([$id]);
    }
}