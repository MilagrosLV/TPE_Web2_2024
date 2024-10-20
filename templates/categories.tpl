{include file="header.tpl"}
<br>
<div class="content categories">
    {if isset($username)}
        <li><a href='{BASE_URL}addedCategory'>Agregar categoría nueva</a></li>
    {/if}
    <ul>
        {foreach $categories as $category}
            <li><p>Categoría nro: {$category->id_categoria}</p></li>
            <li><a href="category/{$category->id_categoria}">{$category->nombre_categoria}</a></li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}     