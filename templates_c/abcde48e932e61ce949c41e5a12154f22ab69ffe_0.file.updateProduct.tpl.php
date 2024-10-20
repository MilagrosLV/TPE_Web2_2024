<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:58:18
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\updateProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67158b0aa27706_35374577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abcde48e932e61ce949c41e5a12154f22ab69ffe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\updateProduct.tpl',
      1 => 1729463712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67158b0aa27706_35374577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h1> Edita un producto</h1>
    <form action="updateP" method="post">
        <label for="productId" ><?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
</label><br>
        <label for="productName" >Nombre del producto </label><br>
            <input type="text" name="productName" placeholder="Inserte nombre del producto"><br>
        <label for="productPrice" >Precio del producto </label><br>
            <input type="text" name="productPrice" placeholder="Inserte precio del producto"><br>
        <select name="categoryId">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre_categoria;?>
 </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit">Editar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
