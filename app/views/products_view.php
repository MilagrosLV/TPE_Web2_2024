<?php
    require_once 'app/controllers/products_controller.php';

class products_view{

    public function __construct(){
        
    }

    public function showProducts($products){
        require_once './templates/header.php';
        require_once 'templates/form_add.php';
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
        require_once './templates/footer.php';
    }

    public function showProduct($product){
        require_once 'templates/header.php';
        require_once 'templates/form_add.php';
        ?>  
        <table>
            <thead>
                <tr style='background-color:yellow;'>
                    <th>Nombre | </th>
                    <th>Precio | </th>
                    <th>Categoria | </th>
                </tr>
            </thead>          
            <tbody>
                <tr> 
                <?php 
                echo"
                    <td>$product->nombre | </td>
                    <td>$product->precio | </td>
                    <td>$product->categoria | </td>
                </tr>";
                ?>
                <div class="actions">
                    <a href="update/<?php echo $product->id ?>" class="btn btn-primary" >Modificar</a>
                    <a href="delete/<?php echo $product->id ?>" class="btn btn-danger" >Eliminar</a>
                </div>
            </tbody>
            </table>   
            <?php 
        
        require_once './templates/footer.php';
    }
    
    
    public function showUpdate(){
        require_once 'templates/header.php';
        require_once 'templates/form_add.php';
        require_once 'templates/footer.php';
    }

    public function showProductsByCategory($products, $category){
        require_once './templates/products_table.php';  //Imprime la tabla de productos        

    }

    public function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }
    
}


    