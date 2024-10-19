<?php
include_once('./app/models/category_model.php');
include_once('./app/views/category_view.php');

class AlbumController{
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
        if(isset($categories)&&!empty($categories)){
            $this->categoryView->showAllCategories($categories);
        }
        else{
            $this->categoryView->showError('Error al obtener categorias');
        }
    }
    public function serveOneCategory($id_category){
        AuthHelper::start();
        AuthHelper::checkTime();
        $completeCategory=$this->categoryModel->getOneCategory($id_category);
        $category=$this->categoryModel->getOneCategory($id_category);
        $category_name=$category->name;
        if(isset($completeCategory)&&!empty($completeCategory)){
            $this->categoryView->showProductsByCategory($completeCategory,$category,$category_name);
        }
        else{
            $this->categoryView->showError('Error al obtener canciones del album');
        }
    }

    public function addedCategory(){
        AuthHelper::checkLoggedIn();
        $this->categoryView->showAddCategory();
    }

    public function addCategory(){
        AuthHelper::checkLoggedIn();
        $category_name =$_POST["nombre_categoria"];
        if((isset($title_album))&&(!empty($category_name))){
            $this->categoryModel-> insertCategory($category_name); 
            header("Location: " . BASE_URL . 'categorias');
        }
        else{
            $this->categoryView->showError('Error al insertar album');
        }
    }

    public function deleteCategoryConfirmation($id){
        AuthHelper::checkLoggedIn();
        $this->categoryView->showDeleteAlbumConfirmation($id);
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

    public function showError($msg='Error. '){
        AuthHelper::start();
        AuthHelper::checkTime();    
        $this->categoryView->showError($msg);
    }
}