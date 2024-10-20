{include file="header.tpl"}

<div class="content">
    <h2>Está seguro que quiere eliminar la categoría numero {$id}?</h2>
    <h3>AVISO: se eliminarán también los productos de la misma.</h3>
    <a href="{BASE_URL}deleteCategoryConfirm/{$id}">Sí, eliminar.</a>
    <a href="{BASE_URL}home">Cancelar</a>
</div>

{include file="footer.tpl"}