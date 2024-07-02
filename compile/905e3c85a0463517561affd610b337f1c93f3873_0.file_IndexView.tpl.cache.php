<?php
/* Smarty version 5.3.1, created on 2024-06-28 15:32:08
  from 'file:notes/IndexView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667ed778ce5aa5_32968525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '905e3c85a0463517561affd610b337f1c93f3873' => 
    array (
      0 => 'notes/IndexView.tpl',
      1 => 1719573628,
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
function content_667ed778ce5aa5_32968525 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/administrator/websites/demo/templates/notes';
$_smarty_tpl->getCompiled()->nocache_hash = '1174482925667ed778cdbd98_10040470';
$_smarty_tpl->renderSubTemplate("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<main class="bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('notes'), 'note');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('note')->value) {
$foreach0DoElse = false;
?>
    <li class="bg-white rounded-lg shadow-md overflow-hidden">
      <a href="/note?id=<?php echo $_smarty_tpl->getValue('note')['id'];?>
" class="block p-4 hover:bg-indigo-500 hover:text-white transition-colors duration-300">
        <span style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
          <?php echo $_smarty_tpl->getValue('note')['body'];?>

        </span>
      </a>
    </li>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
        <p class="mt-6 text-center">
            <a href="/note/create" class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 transition-colors duration-300">Add New Note</a>
        </p>
    </div>
</main>


<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
