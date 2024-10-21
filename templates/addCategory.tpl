{include file="header.tpl"}

<div class="content">
    <form action="addCategory" method="post">
        <label for="categoryName" >Nombre de la categoría: </label><br>
            <input type="text" name="categoryName" placeholder="Ingrese como quiera llamarla" required/><br>
        <input type="submit" name="Agregar">
    </form>
</div>

{include file="footer.tpl"}