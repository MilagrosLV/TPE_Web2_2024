<?php
require_once './app/controllers/user_controller.php';

class UserModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    public function getUserByName($username){
        $query = $this->db->prepare('SELECT * FROM `usuarios` WHERE `nombre` = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}