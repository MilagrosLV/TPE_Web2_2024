<?php
//require_once('./supermercado/libs/Smarty.class.php');
require_once './app/controllers/category_controller.php';

class CategoryView{
    private $smarty;
    
    function __construct(){ 
        $this->smarty = new Smarty();
    }
    
    public function showHome(){
        if(isset($_SESSION['username'])){   
            $this->smarty->assign('username',$_SESSION['username']);
        }
        $this->smarty->assign('page', 'Inicio');
        $this->smarty->display('inicio.tpl');
    }

    public function showAllCategories($categories){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('page','Categorías de productos');
        $this->smarty->display('categories.tpl');
    }

    public function showProductsByCategory($completeCategory,$id_category, $category_name){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('category_name', $category_name);
        $this->smarty->assign('completeCategory', $completeCategory);
        $this->smarty->assign('id_category', $id_category);
        $this->smarty->assign('page','Productos de la categoria...');
        $this->smarty->display('products.tpl');
    }

    public function showAbout(){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page','Sobre nosotres');
        $this->smarty->display('about.tpl');
    }

    public function showAddCategory(){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Agregar categoría');
        $this->smarty->display('addCategory.tpl');
    }

    public function showDeleteCategoryConfirmation($id){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('id', $id);
        $this->smarty->assign('page', 'Eliminar Album');
        $this->smarty->display('deleteAlbumConfirmation.tpl');
    }
    
    public function showError($msg){
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Error');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
}