{include file="header.tpl"}
<br>
<div class="content">
    {if isset($username)}
        <h2><a href='{BASE_URL}addedProduct'>Agregar producto nuevo</a></h2>
    {/if}
    <table class="table">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
    {foreach $products as $product}
        <tr>
            <td><a href="{BASE_URL}product/{$product->id_producto}">{$product->nombre_producto}</a></td>
            <td><p>$ {$product->precio_producto} </p> </td>
            <td><a href="{BASE_URL}category/{$product->id_categoria}"> {$product->id_categoria} </a></td>
        </tr>
    {/foreach}
    </table>
</div>
{include file="footer.tpl"}