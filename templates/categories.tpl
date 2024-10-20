{include file="header.tpl"}
<div class="content categories">
    <ul>
        {foreach $categories as $category}
            <li><p>Categoría nro: {$category->id_category}</p></li>
            <li><a href="category/{$category->id_category}">{$category->category_name}</a></li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}    