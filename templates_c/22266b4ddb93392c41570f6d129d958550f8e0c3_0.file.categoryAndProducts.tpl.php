<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:48:35
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\categoryAndProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671588c32a75b5_45741753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22266b4ddb93392c41570f6d129d958550f8e0c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\categoryAndProducts.tpl',
      1 => 1729464148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_671588c32a75b5_45741753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<div class="content">
<ul>
    <h2><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li><b><?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
: </b><a href="<?php echo BASE_URL;?>
product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre_producto;?>
</a></li><br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
    <a href="<?php echo BASE_URL;?>
deleteCategoryConfirm/<?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
"> Eliminar </a> 
    <a href="<?php echo BASE_URL;?>
updateCategory/<?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
"> Editar </a>   
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }
}
