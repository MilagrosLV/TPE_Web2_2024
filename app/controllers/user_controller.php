<?php
require_once 'app/models/user_model.php';
require_once 'app/views/user_view.php';

class controlUsuario {
    private $modelo;
    private $vista;

    public function __construct() {
        $this->modelo = new usuarioModel();
        $this->vista = new usuarioVista();
        
    }

    public function showLogin(){
        return $this->vista->showLogin();
    }

    public function login(){

        if (!isset($_POST['nombre']) || empty($_POST['nombre'])){
            return $this->vista->showError('Completar nombre de usuario');
        }

        if (!isset($_POST['contrasenia']) || empty($_POST['contrasenia'])){
            return $this->vista->showError('Completar contraseña');
        }

        $nombre = $_POST['nombre'];
        $contrasenia = $_POST['contrasenia'];

        $usuarioDB = $this->modelo->getUsuario($nombre);

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

    public function desloguear() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL);
    }

}