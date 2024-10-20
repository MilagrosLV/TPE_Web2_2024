<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:56:18
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\showAllProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67158a920e3478_18517188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d338c308096ffc8f2ef0cf3e84731f1343a772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\showAllProducts.tpl',
      1 => 1729457180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67158a920e3478_18517188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<div class="content">
    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
        <li><a href='<?php echo BASE_URL;?>
addedProduct'>Agregar producto nuevo</a></li>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <h3 class="card-title"><a href="<?php echo BASE_URL;?>
product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre_producto;?>
</a></h3>
        <p>$ <?php echo $_smarty_tpl->tpl_vars['product']->value->precio_producto;?>
 </p> <a href="<?php echo BASE_URL;?>
category/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_categoria;?>
">Categoría nro <?php echo $_smarty_tpl->tpl_vars['product']->value->id_categoria;?>
</a></p><br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
