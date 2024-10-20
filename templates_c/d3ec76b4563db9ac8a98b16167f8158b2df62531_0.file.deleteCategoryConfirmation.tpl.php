<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:48:37
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\deleteCategoryConfirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671588c512d540_05241771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ec76b4563db9ac8a98b16167f8158b2df62531' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\deleteCategoryConfirmation.tpl',
      1 => 1729464163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_671588c512d540_05241771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <h2>Está seguro que quiere eliminar la categoría numero <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
?</h2>
    <h3>AVISO: se eliminarán también los productos de la misma.</h3>
    <a href="<?php echo BASE_URL;?>
deleteCategory/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Sí, eliminar.</a>
    <a href="<?php echo BASE_URL;?>
home">Cancelar</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
