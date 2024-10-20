<?php
include_once('./app/models/category_model.php');
include_once('./app/views/category_view.php');

class CategoryController {
    private $categoryModel;
    private $categoryView;

    public function __construct(){
        $this->categoryModel = new CategoryModel();
        $this->categoryView = new CategoryView();
    }

    public function home(){
        AuthHelper::start();
        AuthHelper::checkTime();
        $this->categoryView->showHome();
    }

    public function serveAllCategories(){
        AuthHelper::start();
        AuthHelper::checkTime();
        $categories=$this->categoryModel->getAllCategories();
        if((isset($categories))&&(!empty($categories))){
            $this->categoryView->showAllCategories($categories);
        }
        else{
            $this->categoryView->showError('Error al obtener categorias');
        }
    }
    public function serveOneCategoryAndProducts($id_category){
        AuthHelper::start();
        AuthHelper::checkTime();
        $completeCategory=$this->categoryModel->getProductsByCategoryID($id_category);
        $category=$this->categoryModel->getOneCategory($id_category);
        $category_name=$category->name;
        if(isset($completeCategory)&&!empty($completeCategory)){
            $this->categoryView->showProductsByCategory($completeCategory, $id_category, $category_name);
        }
        else{
            $this->categoryView->showError('Error al obtener productos de la  Cat6egoría');
        }
    }

    public function addedCategory(){ 
        AuthHelper::checkLoggedIn();
        $this->categoryView->showAddCategory();
    }

    public function addCategory(){
        AuthHelper::checkLoggedIn();
        $category_name =$_POST["categoryName"];
        if((isset($category_name))&&(!empty($category_name))){
            $this->categoryModel-> insertCategory($category_name); 
            header("Location: " . BASE_URL . 'categorias');
        }
        else{
            $this->categoryView->showError('Error al insertar Categoría');
        }
    }

    public function deleteCategoryConfirmation($id){
        AuthHelper::checkLoggedIn();
        $this->categoryView->showDeleteCategoryConfirmation($id);
    }

    public function deleteCategory($id_category){
        AuthHelper::checkLoggedIn();
        if(isset($id_category)&&!empty($id_category)){
            $this->categoryModel->deleteCategoryById($id_category);
            header("Location: " . BASE_URL . 'categorias'); 
        }
        else{
            $this->categoryView->showError('No se ha podido eliminar la categoria');
        }
    }

    public function about(){
        AuthHelper::start();
        AuthHelper::checkTime();
        $this->categoryView->showAbout();
    }

    public function serveError($msg='Error. '){
        AuthHelper::start();
        AuthHelper::checkTime();    
        $this->categoryView->showError($msg);
    }
}