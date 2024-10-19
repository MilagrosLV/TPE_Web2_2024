<?php
require_once './app/views/products_view.php';
require_once './app/models/products_model.php';

function showDB(){
    $products = getProducts();
    showProducts($products);
   
}

function showProductsByCategory($products, $category){
    //Verificar datos obligatorios y valida la entrada de usuarios
    if ((!isset($_GET['categoria'])) || empty($_GET['categoria'])) {
        showError('Categoría no especificada');
        return;
    } 

    //Obtiene la categoria enciada por GET
    $category = $_GET['categoria'];

    //Llama al model para obtener los productos
    $products = getProductsByCategory($category);

    showProductsByCategory($products, $category);
}

function showProduct($product){
    //Verificar datos obligatorios y valida la entrada de usuarios
    if ((!isset($_GET['producto'])) || empty($_GET['producto'])) {
        showError('Producto no especificado');
        return;
    }

    //Llama al model para obtener los productos
    //$producto = buscarProducto($producto);

    showProduct($product);
}

function addProduct(){

    if ((!isset($_POST['nombre']))||(empty($_POST['nombre']))) {
        showError('Nombre no especificado');
    }

    if ((!isset($_POST['precio']))||(empty($_POST['precio']))) {
        showError('Precio no especificado');
    }

    if ((!isset($_POST['categoria']))||(empty($_POST['categoria']))) {
        showError('Categoría no especificada');
    }


    $name = $_POST['nombre'];
    $price = $_POST['precio'];
    $category = $_POST['categoria'];
    $action = $_POST['accion'];
    $id_user = $_POST['idUsuario'];

    switch ($action) {
        case 'add':
            $id = addProduct($name, $price, $category);

            if ($id) {
                header('Location: ' . BASE_URL);
            } else {
                echo "Error al insertar";
            }
            break;

        case 'update':
            if ((!isset($_POST['idUsuario']))) {
                showError('Categoría no especificada');
            }
            $result = updateProduct($name, $price, $category,$id_user);
            if ($result) {
                header('Location: ' . BASE_URL);
            } else {
                echo"error al insertar";
            }
            break;

        default:
            showError("Acción no válida");
    }
}

   

function  removerProducto($id){
    deleteProduct($id);
    header('Location: ' . BASE_URL);
}

function updateProduct($id){
    showUpdate($id);
}
