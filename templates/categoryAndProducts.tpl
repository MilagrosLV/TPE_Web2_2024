{include file="header.tpl"}
<br>
<div class="content">
<ul>
    <h2>{$category_name}</h2>
    {foreach $products as $product}
        <li><b>{$product->id_product}: </b><a href="{BASE_URL}product/{$product->id_product}">{$product->product_name}</a></li><br>
    {/foreach}
</ul>
{if isset($username)}
    <a href="{BASE_URL}deleteCategory/{$id_category}"> Eliminar </a> 
    <a href="{BASE_URL}updateCategory/{$id_category}"> Editar </a>   
{/if}
</div>
{include file="footer.tpl"}
