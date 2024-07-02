<?php
/* Smarty version 5.3.1, created on 2024-06-29 10:30:50
  from 'file:head.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667fe25a9114d6_16102821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e49b0cd62c3f87ecc0e0ad745b573d66e365f7' => 
    array (
      0 => 'head.tpl',
      1 => 1719520108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667fe25a9114d6_16102821 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/administrator/websites/demo/templates';
?><!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('pageTitle') ?? null)===null||$tmp==='' ? "Document" ?? null : $tmp);?>
</title>
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com?plugins=forms"><?php echo '</script'; ?>
>
</head>
<body class="h-full">
</body>
</html><?php }
}
