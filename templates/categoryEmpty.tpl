{include file="header.tpl"}

<div class="content">
    <ul>
        <h2>{$category_name}</h2>
        <li><b>No hay productos en la categoría.</b></li>
        <br>
    </ul>
    {if isset($username)}
        <a href='{BASE_URL}addedProduct'>Agregar producto nuevo</a>
        <br>
        <a href="{BASE_URL}deleteCategoryConfirm/{$id_category}"> Eliminar categoría |</a> 
        <a href="{BASE_URL}updateCategory/{$id_category}">| Editar categoría</a> 
    {/if}
</div>

{include file="footer.tpl"} 