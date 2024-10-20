<?php
include_once('./app/models/product_model.php');
include_once('./app/views/product_view.php');

class ProductController {
    private $ProductModel;
    private $ProductView;

    public function __construct() {
        $this->ProductModel = new ProductModel();
        $this->ProductView = new ProductView();
    }

    public function serveProducts() {
        AuthHelper::start();
        AuthHelper::checkTime();
        $products = $this-> ProductModel-> getProducts();
        if (!empty($products)){
            $this->ProductView->showProducts($products);
        }
        else {
            $this->ProductView->showError('No hay productos para mostrar.');
        }
    }

    public function serveProduct($id){
        AuthHelper::start();
        AuthHelper::checkTime();
        $product = $this-> ProductModel-> getProduct($id);
        if (isset($product)&&!empty($product)){
            $this-> ProductView -> showProduct($product);
        }
        else
            $this-> ProductView -> showError('No hay ninguna canción para mostrar.');

    }

    public function addedProduct(){
        AuthHelper::checkLoggedIn();
        $select= $this-> ProductModel-> getSelect();
        $this-> ProductView -> showAddProduct($select);        
    }

    public function addProduct(){
        AuthHelper::checkLoggedIn();
        $product_name =$_POST["productName"];
        $product_price = $_POST["productPrice"];
        $id_category=$_POST["categoryId"];
        if(isset($product_name)&&!empty($product_name)&&isset($product_price)&&!empty($product_price)&&isset($id_category)&&!empty($id_category)){
            $this->ProductModel-> insertProduct($product_name, $product_price, $id_category); 
            header("Location: " . BASE_URL . 'category'. '/' . $id_category); 
        }
        else{
            $this-> ProductView -> showError('No se ha podido añadir la categoría');
        }
    }

    public function deleteProduct($id){
        AuthHelper::checkLoggedIn();
        if(isset($id)&&!empty($id)){
            $this->ProductModel->deleteProductById($id);
            header("Location: " . BASE_URL . 'products'); 
        }
        else{
            $this->ProductView->showError('No se ha podido eliminar la canción');
        }
    }
}

