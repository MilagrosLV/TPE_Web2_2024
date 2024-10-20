<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:58:17
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67158b092aa8f8_11935117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d578377bb4516141789db17ccba8038428eef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\product.tpl',
      1 => 1729455965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67158b092aa8f8_11935117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<div class="content">
    <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre_producto;?>
</h3>
    <p class="card-text">$ <?php echo $_smarty_tpl->tpl_vars['product']->value->precio_producto;?>
</a></p>
    <p class="card-text">Producto nro <?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
 en la Categoría numero <a href="<?php echo BASE_URL;?>
category/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->id_categoria;?>
</a></p>
    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
        <a href="<?php echo BASE_URL;?>
deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"> Eliminar </a>
        <a href="<?php echo BASE_URL;?>
updateProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"> Editar </a>   
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
