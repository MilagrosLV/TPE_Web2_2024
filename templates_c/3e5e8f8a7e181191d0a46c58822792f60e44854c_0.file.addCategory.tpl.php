<?php
/* Smarty version 4.3.1, created on 2024-10-23 22:49:19
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\addCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6719614fbd8730_89776494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e5e8f8a7e181191d0a46c58822792f60e44854c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\addCategory.tpl',
      1 => 1729469894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6719614fbd8730_89776494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <form action="addCategory" method="post">
        <label for="categoryName" >Nombre de la categoría: </label><br>
            <input type="text" name="categoryName" placeholder="Ingrese como quiera llamarla" required/><br>
        <input type="submit" name="Agregar">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
