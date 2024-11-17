{include file="header.tpl"}

<div class="content">
    <h1>Editar categoría {$category->nombre_categoria}</h1>
    <form action="updateC" method="post">
        <select name="categoryId">
            <option value="{$category->id_categoria}">{$category->id_categoria}</option>
        </select>
        <br>
        <label for="categoryName" >Nombre de la categoría: </label><br>
            <input type="text" name="categoryName" placeholder="Ingrese como quiera llamarla" required/>
        <br>
        <button type="submit">Editar</button>
    </form>
</div>

{include file="footer.tpl"}