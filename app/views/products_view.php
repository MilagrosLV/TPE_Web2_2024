<?php
    require_once 'app/controllers/products_controller.php';

class products_view{

    public function __construct(){
        
    }

    public function showProducts($products){
        require_once './templates/header.phtml';
        ?>
        <h2>Todos nuestros productos</h2>

        <ul class="list-group">
        <?php foreach($products as $product){ ?>
            <li class="list-group-item item-product">
                <div class="label">
                    <b><?= $product->nombre ?> | </b>
                    <b><?= $product->precio ?> | </b>
                    <b><?= $product->categoria ?></b>
                    <div class="actions">
                        <a href="update/<?php echo $product->id ?>" class="btn btn-primary">Modificar</a>
                        <a href="delete/<?php echo $product->id ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </li>

        
        <?php
        }
        require_once './templates/footer.phtml';
    }

    public function showProduct($product){
        require_once './templates/header.phtml';
        ?>
        <h2>Producto</h2>
        <ul class="list-group">
            <li class="list-group-item item-product">
                <div class="label">
                    <b><?= $product->nombre ?> | </b>
                    <b><?= $product->precio ?> | </b>
                    <b><?= $product->categoria ?></b>
                    <div class="actions">
                        <a href="update/<?php echo $product->id ?>" class="btn btn-primary">Modificar</a>
                        <a href="delete/<?php echo $product->id ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </li>

        <?php
        require_once './templates/footer.phtml';
    }
    
    
    public function showUpdate(){
        require_once './templates/form_add.phtml';

    }

    public function showProductsByCategory($products, $category){
        require_once './templates/list.phtml';  //Imprime la tabla de productos        

    }

    public function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }
    
}


    