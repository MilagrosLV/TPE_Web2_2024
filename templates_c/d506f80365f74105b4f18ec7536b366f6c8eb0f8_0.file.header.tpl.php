<?php
/* Smarty version 4.3.1, created on 2024-10-20 23:41:11
  from 'C:\xampp\htdocs\web2\TPE_Web2_2024\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671578f75b75b6_22706048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd506f80365f74105b4f18ec7536b366f6c8eb0f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_Web2_2024\\templates\\header.tpl',
      1 => 1729460296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671578f75b75b6_22706048 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</title>
            <link rel="stylesheet" href="<?php echo BASE_URL;?>
css\style.css">
        </head>
        <body>
            <header class="navbar">
                <h1 class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
                <ul>
                    <li><a href='<?php echo BASE_URL;?>
home'>Hogar</a></li>
                    <li><a href='<?php echo BASE_URL;?>
categories'>Categorías</a></li>
                    <li><a href='<?php echo BASE_URL;?>
products'>Productos</a></li>
                    <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?>
                        <li><a href='<?php echo BASE_URL;?>
about'>Sobre nosotres</a></li>
                        <li><a href='<?php echo BASE_URL;?>
logout'>Abandonar Sesión <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
                    <?php } else { ?>
                        <li><a href='<?php echo BASE_URL;?>
about'>Sobre nosotres</a></li>
                        <li><a href='<?php echo BASE_URL;?>
login'>Iniciar Sesión</a></li>
                    <?php }?>
                </ul>
            </header><?php }
}
