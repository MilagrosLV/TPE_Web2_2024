<?php
/* Smarty version 4.3.1, created on 2024-10-23 22:38:30
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\showAllProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67195ec625c800_51970838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d338c308096ffc8f2ef0cf3e84731f1343a772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\showAllProducts.tpl',
      1 => 1729715906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67195ec625c800_51970838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<div class="content">
    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
        <h2><a href='<?php echo BASE_URL;?>
addedProduct'>Agregar producto nuevo</a></h2>
    <?php }?>
    <table class="table">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <tr>
            <td><a href="<?php echo BASE_URL;?>
product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre_producto;?>
</a></td>
            <td><p>$ <?php echo $_smarty_tpl->tpl_vars['product']->value->precio_producto;?>
 </p> </td>
            <td><a href="<?php echo BASE_URL;?>
category/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['product']->value->id_categoria;?>
 </a></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
