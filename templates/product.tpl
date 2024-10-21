{include file="header.tpl"}
<br>
<div class="content">
    <h3 class="card-title">{$product->nombre_producto}</h3>
    <p class="card-text">$ {$product->precio_producto}</a></p>
    <p class="card-text">Producto nro {$product->id_producto} en la Categoría numero <a href="{BASE_URL}category/{$product->id_categoria}">{$product->id_categoria}</a></p>
    {if isset($username)}
        <a href="{BASE_URL}deleteProduct/{$product->id_producto}"> Eliminar |</a>
        <a href="{BASE_URL}updateProduct/{$product->id_producto}">| Editar </a>   
    {/if}
</div>

{include file="footer.tpl"}