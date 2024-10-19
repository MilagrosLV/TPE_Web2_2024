<?php
require_once './app/views/products_view.php';
require_once './app/models/products_model.php';

class products_controller {
    //Atributos
    private $model;
    private $view;

    public function __construct(){
        $this->model = new products_model();
        $this->view = new products_view();
    }


    public function showProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
       
    }
    
    public function showProductsByCategory($products, $category){
        //Verificar datos obligatorios y valida la entrada de usuarios
        if ((!isset($_GET['categoria'])) || empty($_GET['categoria'])) {
            $this->view->showError('Categoría no especificada');
            return;
        } 
    
        //Obtiene la categoria enciada por GET
        $category = $_GET['categoria'];
    
        //Llama al model para obtener los productos
        $products = $this->model->getProductsByCategory($category);
    
        $this->view->showProductsByCategory($products, $category);
    }
    
    public function showProduct($product){
        //Verificar datos obligatorios y valida la entrada de usuarios
        if ((!isset($_GET['producto'])) || empty($_GET['producto'])) {
            $this->view->showError('Producto no especificado');
            return;
        }
    
        //Llama al model para obtener los productos
        //$producto = buscarProducto($producto);
    
        $this->view->showProduct($product);
    }
    
    public function addProduct(){
    
        if ((!isset($_POST['nombre']))||(empty($_POST['nombre']))) {
            return $this->view->showError('Nombre no especificado');
        }
    
        if ((!isset($_POST['precio']))||(empty($_POST['precio']))) {
            return $this->view->showError('Precio no especificado');
        }
    
        if ((!isset($_POST['categoria']))||(empty($_POST['categoria']))) {
            return $this->view->showError('Categoría no especificada');
        }
    

        $name = $_POST['nombre'];
        $price = $_POST['precio'];
        $category = $_POST['categoria'];
        $action = $_POST['action'];
        $id_user = $_POST['idUsuario'];
    
        switch ($action) {
            case 'add':
                $id = $this->model->insertProduct($name, $price, $category);
    
                if ($id) {
                    header('Location: ' . BASE_URL);
                } else {
                    $this->view->showError('No se logró insertar');
                }
                break;
    
            case 'update':
                if ((!isset($_POST['idUsuario']))) {
                    $this->view->showError('Categoría no especificada');
                }

                $result = $this->model->updateProduct($name, $price, $category, $id_user);
                if ($result) {
                    header('Location: ' . BASE_URL);
                } else {
                    $this->view->showError('No se logró insertar');
                }
                break;
    
            default:
            $this->view->showError("Acción no válida");
        }
    }
    
       
    
    public function  removerProducto($id){
        $this->model->deleteProduct($id);
        header('Location: ' . BASE_URL);
    }
    
    public function updateProduct($id){
        $this->view->showUpdate($id);
    }
    
}
