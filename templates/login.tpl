{include file="header.tpl"}

<div class="content">
    <br>
    <div class="mensaje">
    <h2>{$msg}</h2>
    </div>
    <form method="post" action="verify">
        <label for="username">Usuario:</label> <br>
            <input type="text" name="username" id='username' placeholder="usuario" required> <br>
        <label for="password">Contraseña:</label> <br>
            <input type="password" name="password" id='password' placeholder="contraseña" required> <br><br>
        <input type="submit" value="Ingresar">
    </form>
</div>

{include file="footer.tpl"}