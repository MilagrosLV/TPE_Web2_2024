<?php
    require_once 'app/controllers/products_controller.php';

    function showError($error) {
        echo "<h2>Error. $error.</h2>";
    }
    ?> 

        <?php
    function showHogar($productos){
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
        foreach($productos as $producto){
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
                    <a href="modificar/<?php echo $producto->id ?>" class="btn btn-primary" >Modificar</a>
                    <a href="eliminar/<?php echo $producto->id ?>" class="btn btn-danger" >Eliminar</a>
                </div>
            </thead>
            </table>   
            <?php 
        }
        require 'templates/footer.php';
    }
    ?> 
    <?php
    function showModificar(){
        require 'templates/header.php';
        require 'templates/formAgregar.php';
        require 'templates/footer.php';
    }

    function showProductos($productos, $categoria){
        echo "<h1>Lista por Categoría: $categoria</h1>";
        echo "<a href='./index.php'>Volver</a>";
        //Imprime la tabla de Productos
    ?> 
        <table>
        <thead>
            <tr>
                <td>Nombre </td>
                <td>Precio </td>
                <td>Categoria </td>
            </tr>
        </thead>
        </table>

        <?php
        foreach($productos as $producto) {
            echo"
                <table>
                <thead>
                    <tr>
                        <td>$producto->nombre</tb>
                        <tb>$producto->precio</tb>
                    </tr>
                </thead>
                </table>";
        }
    }

    ?>  

</body>
</html>