<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function mostrarError($error) {
        echo "<h2>Error. $error.</h2>";
    }

    function mostrarProductos($productos, $categoria){
        echo "<h1>Lista por Categoría: $categoria</h1>";
        echo "<a href='./index.php'>Volver</a>";

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