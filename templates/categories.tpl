{include file="header.tpl"}
<br>
<div class="content categories">
    {if isset($username)}
        <h2><a href='{BASE_URL}addedCategory'>Agregar categoría nueva</a></h2>
    {/if}
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Categoría</th>
        </tr>
        {foreach $categories as $category}
        <tr>
            <td>{$category->id_categoria}</td>
            <td><a href="category/{$category->id_categoria}">{$category->nombre_categoria}</a></td>
        </tr>
        {/foreach}
    </table>
</div>
{include file="footer.tpl"}     