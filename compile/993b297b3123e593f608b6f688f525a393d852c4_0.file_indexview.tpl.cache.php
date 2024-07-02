<?php
/* Smarty version 5.3.1, created on 2024-06-29 10:26:32
  from 'file:indexview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667fe15864c9b9_11823389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993b297b3123e593f608b6f688f525a393d852c4' => 
    array (
      0 => 'indexview.tpl',
      1 => 1719656787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:banner.tpl' => 2,
  ),
))) {
function content_667fe15864c9b9_11823389 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/administrator/websites/demo/templates';
$_smarty_tpl->getCompiled()->nocache_hash = '888100514667fe1586459f3_61414616';
$_smarty_tpl->renderSubTemplate("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


      <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('companies'), 'company');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach0DoElse = false;
?>
                    <?php $_smarty_tpl->assign('userId', $_smarty_tpl->getValue('company')['id'], false, NULL);?>
                    <li>
                        <a href="/notes?userId=<?php echo $_smarty_tpl->getValue('userId');?>
">
                            <h3 class="text-lg font-semibold"><?php echo $_smarty_tpl->getValue('company')['name'];?>
</h3>
                            <!-- Add additional company details here if needed -->
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
<?php $_smarty_tpl->renderSubTemplate("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>  <?php }
}
