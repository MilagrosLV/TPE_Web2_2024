

<?php require_once './app/views/products_view.php';  ?> 

    <h1>Lista por Categoría: <?php $category?></h1>
    <a href='./home'>Volver</a>
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
                        <td>$product->name</tb>
                        <tb>$product->price</tb>
                    </tr>
                </tbody>
                </table>";
        }?>

