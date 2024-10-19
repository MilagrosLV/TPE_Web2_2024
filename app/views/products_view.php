<?php
    require_once 'app/controllers/products_controller.php';

class products_view{

    public function __construct(){
        
    }

    public function showProducts($products){
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
        <?php
        foreach($products as $product){
        ?>  
            
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
        require 'templates/header.php';
        require 'templates/form_add.php';
        require 'templates/footer.php';
    }

    public function showProductsCategory($products, $categoria){
        echo "<h1>Lista por Categoría: $categoria</h1>";
        echo "<a href='./home'>Volver</a>";
        //Imprime la tabla de productos
    ?> 
        <table>
        <thead>
            <tr>
                <td>Nombre </td>
                <td>Precio </td>
                <td>Categoria </td>
            </tr>
        </thead>

        <?php
        foreach($products as $product) {
            echo"
                <tbody>
                    <tr>
                        <td>$product->nombre</tb>
                        <tb>$product->precio</tb>
                    </tr>
                </tbody>
                </table>";
        }
    }

    public function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }
    
}

    