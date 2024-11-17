{include file="header.tpl"}

<div class="content">
    <h1> Editar producto {$product->nombre_producto}</h1>
    <form action="updateP" method="post">
        <select name="productId">
            <option value="{$product->id_producto}">{$product->id_producto}</option>
        </select>
        <label for="productName" >Nombre del producto </label><br>
            <input type="text" name="productName" placeholder="Inserte nombre del producto"><br>
        <label for="productPrice" >Precio del producto </label><br>
            <input type="number" name="productPrice" placeholder="Inserte precio del producto"><br>
        <select name="categoryId">
            {foreach from=$select  item=$item}
                <option value="{$item->id_categoria}">{$item->nombre_categoria} </option>
            {/foreach}
        </select>
        <button type="submit">Editar</button>
    </form>
</div>

{include file="footer.tpl" }