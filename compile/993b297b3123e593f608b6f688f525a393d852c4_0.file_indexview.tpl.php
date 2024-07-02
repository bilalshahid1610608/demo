<?php
/* Smarty version 5.3.1, created on 2024-06-29 22:47:32
  from 'file:indexview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66808f0459e068_94023609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993b297b3123e593f608b6f688f525a393d852c4' => 
    array (
      0 => 'indexview.tpl',
      1 => 1719701247,
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
function content_66808f0459e068_94023609 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/administrator/websites/demo/templates';
$_smarty_tpl->renderSubTemplate("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<main class="bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('companies'), 'company');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach0DoElse = false;
?>
                    <li>
                        <a href="/notes?userId=<?php echo $_smarty_tpl->getValue('company')['id'];?>
" class="block bg-white rounded-lg shadow-md p-4 hover:bg-gray-100 transition duration-200">
                            <h3 class="text-lg font-semibold"><?php echo $_smarty_tpl->getValue('company')['name'];?>
</h3>
                            <!-- Add additional company details here if needed -->
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</main>

<?php $_smarty_tpl->renderSubTemplate("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
