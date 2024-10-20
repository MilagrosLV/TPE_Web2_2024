<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:56:04
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\updateCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67158a84810d50_91851506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b5097c2b671a3044edba4e2f2a5e84dee7e6e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\updateCategory.tpl',
      1 => 1729450974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67158a84810d50_91851506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <form action="updateC" method="post">
        <label for="categoryId" ><?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
</label><br>
        <label for="categoryName" >Nombre de la categoría: </label><br>
            <input type="text" name="categoryName" placeholder="Ingrese como quiera llamarla" required/><br>
        <input type="submit" name="Agregar">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
