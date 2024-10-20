<?php
/* Smarty version 4.3.1, created on 2024-10-20 15:01:12
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6714ff1844d329_62076658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0e22c3d43a4d360934721db89e7dda1eb3e0d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\inicio.tpl',
      1 => 1729377708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6714ff1844d329_62076658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <br>
    <h2>BIENVENIDE</h2>
    <h3>A nuestro Supermercado</h3>
    <?php if (((!(isset($_smarty_tpl->tpl_vars['username']->value))) && (empty($_smarty_tpl->tpl_vars['username']->value)))) {?>
        <p>Si desea acceso administrativo, por favor inicie sesión</p>
        <a href="<?php echo BASE_URL;?>
login">Iniciar Sesion</a>
    <?php } else { ?>
        <h2>¡Hola <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h2>
        <p>Ya ha ingresado ¡Disfrute su experiencia!</p>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
