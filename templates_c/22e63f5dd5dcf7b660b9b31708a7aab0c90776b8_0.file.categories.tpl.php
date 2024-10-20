<?php
/* Smarty version 4.3.1, created on 2024-10-20 15:01:09
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6714ff1569ad21_19003942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e63f5dd5dcf7b660b9b31708a7aab0c90776b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\categories.tpl',
      1 => 1729378824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6714ff1569ad21_19003942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content categories">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li><p>Categoría nro: <?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
</p></li>
            <li><a href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    <?php }
}
