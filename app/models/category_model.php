<?php
//require_once './controllers/category_controller.php';

class CategoryModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    public function getAllCategories(){
        $query = $this->db->prepare('SELECT * FROM `categorias`');
        $query->execute();        
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getOneCategory($id){
        $query = $this->db->prepare('SELECT * FROM `categorias` WHERE `id_categoria` = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getProductsByCategoryID($id_category){
        $query=$this->db->prepare('SELECT * FROM `productos` INNER JOIN `categorias` on `productos`.`id_categoria`=`categorias`.`id_categoria` WHERE `categorias`.`id_categoria` = ?');
        $query->execute(array($id_category));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function insertCategory($category_name){
        $query = $this->db->prepare("INSERT INTO `categorias`  (`nombre_categoria`) VALUES (?)");
        $query->execute([$category_name]);
        return $this->db->lastInsertId();
    }

    public function changeCategory($category_name, $id_category){
        $query = $this->db->prepare('UPDATE `categorias` SET `nombre_categoria`=? WHERE `id_categoria` = ?');
        $result = $query->execute([$category_name, $id_category]);
        return $result;   
    }

    public function deleteCategoryById($id){
        $query=$this->db->prepare("DELETE from `categorias` WHERE `id_categoria`= ? ");
        $query2=$this->db->prepare("DELETE from `productos` WHERE `id_categoria`= ? ");
        $query->execute([$id]);
        $query2->execute([$id]);
    }
}