<?php
/* Smarty version 4.3.1, created on 2024-10-21 01:15:17
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67158f05d18188_40648063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb0ebbd1f7b2036f3a149c957c473b6ad8394f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\login.tpl',
      1 => 1729465732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67158f05d18188_40648063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <br>
    <div class="mensaje">
    <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
    </div>
    <form method="post" action="verify">
        <label for="username">Usuario:</label> <br>
            <input type="text" name="username" id='username' placeholder="usuario" required> <br>
        <label for="password">Contraseña:</label> <br>
            <input type="password" name="password" id='password' placeholder="contraseña" required> <br><br>
        <input type="submit" value="Ingresar">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
