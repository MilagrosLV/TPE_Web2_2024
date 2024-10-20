<?php
/* Smarty version 4.3.1, created on 2024-10-21 00:50:33
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\addProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6715893978e6a4_22823866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c03a4ddac14e921d3be0864bae6e97ff704d8e53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\addProduct.tpl',
      1 => 1729444366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6715893978e6a4_22823866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <h1> Agrega un producto a una categoría</h1>
    <form action="addProduct" method="post">
        <label for="productName" >Nombre del producto</label><br>
            <input type="text" name="productName" placeholder="Inserte nombre del producto"><br>
            <label for="productPrice" >Precio del producto</label><br>
            <input type="text" name="productPrice" placeholder="Inserte precio del producto"><br>
        <select name="categoryId">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>
 </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit">Agregar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
