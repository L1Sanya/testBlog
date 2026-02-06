<?php
/* Smarty version 4.5.6, created on 2026-02-04 22:32:34
  from '/var/www/html/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6983c9025a0e57_28448700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a9a57fd920a50a8eaa8b6ed058c1db99dee6dc' => 
    array (
      0 => '/var/www/html/views/home.tpl',
      1 => 1770244339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6983c9025a0e57_28448700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13392976876983c902580b16_84289491', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block 'content'} */
class Block_13392976876983c902580b16_84289491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13392976876983c902580b16_84289491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
        <section class="category">
            <h2><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['c']->value['description'];?>
</p>

            <div class="posts">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value['posts'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                    <article class="post-card">
                        <h3><a href="/?page=post&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a></h3>
                        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['content'],100);?>
</p>
                    </article>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <a class="btn" href="/?page=category&id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">Все статьи</a>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'content'} */
}
