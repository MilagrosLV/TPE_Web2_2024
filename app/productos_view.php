
    <?php
    require_once 'app/productos_controller.php';

    function mostrarError($error) {
        echo "<h2>Error. $error.</h2>";
    }


    function mostrarHome($productos){
        require 'templates/header.php';
        require 'templates/formModificar.php';
        ?>  
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            </table>";
    <?php
        foreach($productos as $producto){
            echo"
                <table>
                <thead>
                    <tr>
                        <tb>$producto->nombre</tb>
                        <tb>$producto->precio</tb>
                        <tb>$producto->categoria</tb>
                    </tr>
                </thead>
                </table>";   
        }
        require 'templates/footer.php';
    }


    function mostrarProductos($productos, $categoria){
        echo "<h1>Lista por Categoría: $categoria</h1>";
        echo "<a href='./index.php'>Volver</a>";
    ?> 
    
        //Imprime la tabla de Productos
        echo "
        <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
        </thead>
        </table>";

        <?php
        foreach($productos as $producto) {
            echo"
                <table>
                <thead>
                    <tr>
                        <tb>$producto->nombre</tb>
                        <tb>$producto->precio</tb>
                    </tr>
                </thead>
                </table>";
        }
    }

    ?>  

</body>
</html>