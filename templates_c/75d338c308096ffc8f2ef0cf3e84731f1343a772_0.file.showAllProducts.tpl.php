<?php
/* Smarty version 4.3.1, created on 2024-10-20 15:01:10
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\showAllProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6714ff1622fbd3_38885803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d338c308096ffc8f2ef0cf3e84731f1343a772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\showAllProducts.tpl',
      1 => 1729375071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6714ff1622fbd3_38885803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <h3 class="card-title"><a href="<?php echo BASE_URL;?>
product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</a></h3>
        <p> <?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
 </p> <a href="<?php echo BASE_URL;?>
category/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->id_category;?>
</a></p><br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
