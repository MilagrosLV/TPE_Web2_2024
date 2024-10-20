{include file="header.tpl"}

<div class="content">
    <h3 class="card-title">Nombre del producto: {$product->product_name}</h3>
    <p class="card-text">Producto nro {$product->id_product} en la Categoría numero <a href="{BASE_URL}category/{$product->id_category}">{$product->id_category}</a></p>
    {if isset($username)}
        <a href="{BASE_URL}deleteProduct/{$product->id_product}"> Eliminar </a>
        <a href="{BASE_URL}updateProduct/{$product->id_product}"> Editar </a>   
    {/if}
</div>

{include file="footer.tpl"}