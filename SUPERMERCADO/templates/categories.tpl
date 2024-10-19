{include file="header.tpl"}
<div class="content categories">
    <ul>
        {foreach $categories as $category}
            <li><p>Categoría numero {$category->id_category}</p></li>
            <li><a href="categoria/{$album->id_category}">{$album->category_name}</a></li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}    