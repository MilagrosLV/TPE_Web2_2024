<?php
//require_once('./supermercado/libs/Smarty.class.php');
require_once './app/controllers/user_controller.php';

class UserView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showLogin($msg='Inicie sesion para continuar'){
        $this->smarty->assign('msg', $msg);
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'LogIn');
        $this->smarty->display('login.tpl');
    }

}