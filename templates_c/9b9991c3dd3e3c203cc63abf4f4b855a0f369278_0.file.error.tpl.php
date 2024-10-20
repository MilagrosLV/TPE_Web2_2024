<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:22:18
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6715829ab9eb42_55850242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b9991c3dd3e3c203cc63abf4f4b855a0f369278' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\error.tpl',
      1 => 1729368242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6715829ab9eb42_55850242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <h5>Error</h5>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
