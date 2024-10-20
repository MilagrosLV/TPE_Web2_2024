<?php
require_once('./libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setConfigDir('configs');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
//$smarty->testInstall();

require_once './app/controllers/category_controller.php';
require_once './app/controllers/product_controller.php';
require_once './app/controllers/user_controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$CategoryController = new CategoryController();
$UserController = new UserController();
$ProductController = new ProductController();



/* TABLA DE ROUTEO
    ACTION                  DESTINY
    home                    $CategoryController->home();
    login                   $UserController->serveLogin();
    verify                  $UserController->verify();
    logout                  $UserController->logout();
    categories              $CategoryController->serveAllCategories();
    category                $CategoryController->serveProductsByCategory($params[1]);
    products                $ProductController->serveProducts();
    product                 $ProductController->serveProduct($params[1]);
    about                   $CategoryController->about();
    addedCategory           $CategoryController->addedCategory();
    addCategory             $CategoryController->addCategory();
    addedProduct            $ProductController->addedProduct();
    addProduct              $ProductController->addProduct();
    updateProduct           $ProductController->updateProduct();
    updateP                 $ProductController->updateP();
    deleteProduct           $ProductController->deleteProduct($params[1]);
    deleteCategoryConfirm   $CategoryController->deleteCategoryConfirmation($params[1]);        
    deleteCategory          $CategoryController->deleteCategory($params[1]);
*/
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $CategoryController->home();
        break;
    case 'login':
        $UserController->serveLogin();
        break;
    case 'verify':
        $UserController->verify();
        break;
    case 'logout':
        $UserController->logout();
        break;
    case 'categories':
        $CategoryController->serveAllCategories();
        break;
    case 'category':
        $CategoryController->serveOneCategoryAndProducts($params[1]);
        break;
    case 'products':
        $ProductController->serveProducts();
        break;
    case 'product':
        $ProductController->serveProduct($params[1]);
        break;
    case 'about':
        $CategoryController->about();
        break;
    case 'addedCategory':
        $CategoryController->addedCategory();
        break;
    case 'addCategory':
        $CategoryController->addCategory();
        break;
    case 'updateCategory':
        $CategoryController->updateCategory($params[1]);
        break;
    case 'updateC':
        $CategoryController->updateC();
        break;
    case 'addedProduct':
        $ProductController->addedProduct();
        break;
    case 'addProduct':
        $ProductController->addProduct();
        break;
    case 'updateProduct':
        $ProductController->updateProduct($params[1]);
        break;
    case 'updateP':
        $ProductController->updateP();
        break;
    case 'deleteProduct':
        $ProductController->deleteProduct($params[1]);
        break;
    case 'deleteCategoryConfirm':
        $CategoryController->deleteCategoryConfirmation($params[1]);
        break;
    case 'deleteCategory':
        $CategoryController->deleteCategory($params[1]);
        break;
    default: 
        $CategoryController->serveError('Error en router');
        break;
}