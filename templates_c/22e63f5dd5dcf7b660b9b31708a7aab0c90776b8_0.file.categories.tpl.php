<?php
/* Smarty version 4.3.1, created on 2024-10-23 22:42:44
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67195fc435c050_52913996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e63f5dd5dcf7b660b9b31708a7aab0c90776b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\categories.tpl',
      1 => 1729716161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67195fc435c050_52913996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<div class="content categories">
    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
        <h2><a href='<?php echo BASE_URL;?>
addedCategory'>Agregar categoría nueva</a></h2>
    <?php }?>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Categoría</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
</td>
            <td><a href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre_categoria;?>
</a></td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     <?php }
}
