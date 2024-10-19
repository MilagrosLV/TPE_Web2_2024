<?php
require_once 'app/models/user_model.php';
require_once 'app/views/user_view.php';

class user_controller {
    private $model;
    private $vista;

    public function __construct() {
        $this->model = new user_model();
        $this->vista = new user_view();
        
    }

    public function showLogin(){
        return $this->vista->showLogin();
    }

    public function logIn(){

        if (!isset($_POST['nombre']) || empty($_POST['nombre'])){
            return $this->vista->showError('Completar nombre de usuario');
        }

        if (!isset($_POST['contrasenia']) || empty($_POST['contrasenia'])){
            return $this->vista->showError('Completar contraseña');
        }

        $nombre = $_POST['nombre'];
        $contrasenia = $_POST['contrasenia'];

        $usuarioDB = $this->model->getUsuario($nombre);

        if ($usuarioDB === false) {
            return $this->vista->showError('Usuario no encontrado');
        }
        if (password_verify($contrasenia, $usuarioDB->contrasenia)){
            session_start();
            $_SESSION['ID_USUARIO'] = $usuarioDB->id;
            $_SESSION['NOMBRE'] = $usuarioDB->nombre;

            header('Location: ' . BASE_URL);
            
        } else {
            return $this->vista->showLogin();
        }
    }

    public function logOut() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL);
    }

}