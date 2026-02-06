<?php
/* Smarty version 4.5.6, created on 2026-02-04 22:47:13
  from '/var/www/html/views/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6983cc71044b26_68611581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613a09af5fd741260bb75385e34c7ae2f0d44960' => 
    array (
      0 => '/var/www/html/views/category.tpl',
      1 => 1770244345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6983cc71044b26_68611581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6528837096983cc71042c60_39484170', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block 'content'} */
class Block_6528837096983cc71042c60_39484170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6528837096983cc71042c60_39484170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


    <h2><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>

    <div class="sort">
        Сортировать:
        <a href="?page=category&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=date">по дате</a> |
        <a href="?page=category&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=views">по просмотрам</a>
    </div>

    <div class="posts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
            <article class="post-card">
                <h3><a href="/?page=post&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a></h3>
                <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['content'],200);?>
</p>
                <small>Просмотры: <?php echo $_smarty_tpl->tpl_vars['p']->value['views'];?>
</small>
            </article>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php
}
}
/* {/block 'content'} */
}
