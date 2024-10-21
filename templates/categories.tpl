{include file="header.tpl"}
<br>
<div class="content categories">
    {if isset($username)}
        <h2><a href='{BASE_URL}addedCategory'>Agregar categoría nueva</a></h2>
    {/if}
    <ul>
        {foreach $categories as $category}
            <li><p>Categoría nro: {$category->id_categoria}</p></li>
            <li><a href="category/{$category->id_categoria}">{$category->nombre_categoria}</a></li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}     