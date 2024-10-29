<?php
/* Smarty version 4.3.1, created on 2024-10-29 02:34:18
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\categoryEmpty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67203b9abb07f4_45118544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '318f0d9e5ae62283194a67583d9f5d1e5738026f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\categoryEmpty.tpl',
      1 => 1730165624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67203b9abb07f4_45118544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <ul>
        <h2><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</h2>
        <li><b>No hay productos en la categoría.</b></li>
        <br>
    </ul>
    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
        <a href='<?php echo BASE_URL;?>
addedProduct'>Agregar producto nuevo</a>
        <br>
        <a href="<?php echo BASE_URL;?>
deleteCategoryConfirm/<?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
"> Eliminar categoría |</a> 
        <a href="<?php echo BASE_URL;?>
updateCategory/<?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
">| Editar categoría</a> 
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
