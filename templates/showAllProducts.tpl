{include file="header.tpl"}
<br>
<div class="content">
    {if isset($username)}
        <li><a href='{BASE_URL}addedProduct'>Agregar producto nuevo</a></li>
    {/if}
    {foreach $products as $product}
        <h3 class="card-title"><a href="{BASE_URL}product/{$product->id_producto}">{$product->nombre_producto}</a></h3>
        <p>$ {$product->precio_producto} </p> <a href="{BASE_URL}category/{$product->id_categoria}">Categoría nro {$product->id_categoria}</a></p><br>
    {/foreach}
</div>
{include file="footer.tpl"}