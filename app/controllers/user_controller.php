<?php
include_once('./app/models/user_model.php');
include_once('./app/views/user_view.php');
include_once('./helpers/auth_helper.php');

class UserController{
    private $userModel;
    private $userView;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->userView = new UserView();
    }
    
    public function serveLogin(){
        AuthHelper::start();
        $this->userView->showLogin();
    }
    public function logout() {
        AuthHelper::logout();
        header("Location: " . BASE_URL . 'home');
    }

    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->getUserByName($username);
        if ((isset($user))&&(!empty($user)) && ((isset($username))&&(!empty($username))) && ((isset($password))&&(!empty($password))) && (password_verify($password, $user['contrasenia_hash']))) {
            AuthHelper::start();
            AuthHelper::setUser($user);
            header('Location: ' . BASE_URL . 'home');
        } else {
            $this->userView->showLogin('logIn Incorrecto');
        }
    }
}

