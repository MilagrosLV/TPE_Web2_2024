{include file="header.tpl"}

<div class="content">
    <form action="updateC" method="post">
        <select name="categoryId">
            <option value="{$id_category}">{$id_category}</option>
        </select>
        <br>
        <label for="categoryName" >Nombre de la categoría: </label><br>
            <input type="text" name="categoryName" placeholder="Ingrese como quiera llamarla" required/>
        <br>
        <button type="submit">Editar</button>
    </form>
</div>

{include file="footer.tpl"}