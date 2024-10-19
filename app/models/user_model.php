<?php

 class usuarioModel {

    private $db;


    public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=db_supermercado;charset=utf8', 'root', '');
    }
 
    public function getUsuario($nombre){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE nombre = ?');
        $query->execute([$nombre]);
        $usuario = $query->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

 }