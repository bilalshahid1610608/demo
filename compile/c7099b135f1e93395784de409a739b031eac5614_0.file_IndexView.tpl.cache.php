<?php
/* Smarty version 5.3.1, created on 2024-06-27 16:01:53
  from 'file:IndexView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667d8cf12145d0_93938558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7099b135f1e93395784de409a739b031eac5614' => 
    array (
      0 => 'IndexView.tpl',
      1 => 1719503432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_667d8cf12145d0_93938558 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/administrator/websites/demo/templates';
$_smarty_tpl->getCompiled()->nocache_hash = '878589644667d8cf120ae11_00757169';
$_smarty_tpl->renderSubTemplate("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<main class="bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1>Hello <?php echo $_smarty_tpl->getValue('username');?>
!</h1>
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
                        <h3 class="text-lg font-bold"><?php echo $_smarty_tpl->getValue('company')['name'];?>
 - Clauses</h3>
                        </a>
                </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</main>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
