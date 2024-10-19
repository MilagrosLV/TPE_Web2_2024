{include file="header.tpl"}
<div class="content">
<ul>
    <h2>{$category_name}</h2>
    {foreach $products as $product}
        <li><b>{$product->id_product}: </b><a href="{BASE_URL}producto/{$product->id_product}">{$product->product_name}</a></li><br>
    {/foreach}
</ul>
{if isset($username)}
    <a href="{BASE_URL}deleteCategory/{$id_category}"> Eliminar </a>   
{/if}
</div>
{include file="footer.tpl"}
