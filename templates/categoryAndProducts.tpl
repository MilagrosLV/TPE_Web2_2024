{include file="header.tpl"}
<br>
<div class="content">
<ul>
    <h2>{$category_name}</h2>
    {foreach $products as $product}
        <li><b>{$product->id_producto}: </b><a href="{BASE_URL}product/{$product->id_producto}">{$product->nombre_producto}</a></li><br>
    {/foreach}
</ul>
{if isset($username)}
    <a href="{BASE_URL}deleteCategoryConfirm/{$id_category}"> Eliminar |</a> 
    <a href="{BASE_URL}updateCategory/{$id_category}">| Editar </a>   
{/if}
</div>
{include file="footer.tpl"} 
