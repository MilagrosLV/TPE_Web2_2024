{include file="header.tpl"}
<div class="content">
    <h1> Agrega un producto a una categoría</h1>
    <form action="addProduct" method="post">
        <label for="productName" >Nombre del producto</label><br>
            <input type="text" name="productName" placeholder="Inserte nombre del producto"><br>
            <label for="productPrice" >Precio del producto</label><br>
            <input type="text" name="productPrice" placeholder="Inserte precio del producto"><br>
        <select name="categoryId">
            {foreach from=$select  item=$item}
                <option value="{$item->id_categoria}">{$item->nombre_categoria} </option>
            {/foreach}
        </select>
        <button type="submit">Agregar</button>
    </form>
</div>
{include file="footer.tpl" }