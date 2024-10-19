<?php
    require_once 'app/controllers/products_controller.php';

    function showProducts($products){
        require 'templates/header.php';
        require 'templates/formAgregar.php';
        ?>  
        <table>
            <thead>
                <tr style='background-color:yellow;'>
                    <th>Nombre | </th>
                    <th>Precio | </th>
                    <th>Categoria | </th>
                </tr>
            </thead>
        </table>
        <?php
        foreach($products as $producto){
        ?>  
            <table>
            <thead>
                <tr> 
                <?php 
                echo"
                    <td>$producto->nombre | </td>
                    <td>$producto->precio | </td>
                    <td>$producto->categoria | </td>
                </tr>";
                ?>
                <div class="actions">
                    <a href="update/<?php echo $producto->id ?>" class="btn btn-primary" >Modificar</a>
                    <a href="delete/<?php echo $producto->id ?>" class="btn btn-danger" >Eliminar</a>
                </div>
            </thead>
            </table>   
            <?php 
        }
        require './templates/footer.php';
    }
    ?> 
    <?php
    function showUpdate(){
        require 'templates/header.php';
        require 'templates/form_add.php';
        require 'templates/footer.php';
    }

    function showProductsCategory($products, $categoria){
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
        foreach($products as $producto) {
            echo"
                <tbody>
                    <tr>
                        <td>$producto->nombre</tb>
                        <tb>$producto->precio</tb>
                    </tr>
                </tbody>
                </table>";
        }
    }

    function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }
    