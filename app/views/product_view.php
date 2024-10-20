<?php
//require_once('./supermercado/libs/Smarty.class.php');
require_once './app/controllers/product_controller.php';

class ProductView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    
    public function showProducts($products) {
        $this->smarty->assign('page', 'Todos los productos');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('products', $products);
        $this->smarty->display('showAllProducts.tpl');
    }

    public function showAddProduct($select) {
        $this->smarty->assign('page', 'Agregar un producto');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('select', $select);
        $this->smarty->display('addProduct.tpl');

    }

    public function showUpdateProduct($select, $id_product) {
        $this->smarty->assign('page', 'Editar un producto');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('select', $select);
        $this->smarty->assign('id_product', $id_product);
        $this->smarty->display('updateProduct.tpl');

    }
    
    public function showProduct($product) {
        $this->smarty->assign('page', 'Producto');
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('product', $product);
        $this->smarty->display('product.tpl');
    }

    public function showError($msg=' ') {
        if(AuthHelper::getLoggedUserName()){   
            $this->smarty->assign('username',AuthHelper::getLoggedUserName());
        }
        $this->smarty->assign('page', 'Error');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('error.tpl');
    }
}