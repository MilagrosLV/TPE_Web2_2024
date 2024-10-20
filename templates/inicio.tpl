{include file="header.tpl"}

<div class="content">
    <br>
    <h2>BIENVENIDE</h2>
    <h3>A nuestro Supermercado</h3>
    {if ((!isset($username))&&(empty($username)))}
        <p>Si desea acceso administrativo, por favor inicie sesión</p>
        <a href="{BASE_URL}login">Iniciar Sesion</a>
    {else}
        <h2>¡Hola {$username}!</h2>
        <p>Ya ha ingresado ¡Disfrute su experiencia!</p>
    {/if}
</div>

{include file="footer.tpl"}