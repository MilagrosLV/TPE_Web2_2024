<?php
class UserModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=rolling_stones;charset=utf8', 'root', '');
    }

    public function getUserByName($username){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query->execute([':nombre' => $username]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}