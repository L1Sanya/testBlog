<?php
/* Smarty version 4.5.6, created on 2026-02-04 22:47:04
  from '/var/www/html/views/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6983cc6863b4d1_64840559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68fcdff66ccaaf4e7be6dbbca6b37401fbadd28' => 
    array (
      0 => '/var/www/html/views/post.tpl',
      1 => 1770244352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6983cc6863b4d1_64840559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11274978206983cc68639d73_88315843', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block 'content'} */
class Block_11274978206983cc68639d73_88315843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11274978206983cc68639d73_88315843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <article class="full-post">
        <h2><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
        <small>Просмотры: <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
</small>
    </article>

    <section class="related-posts">
        <h3>Похожие статьи</h3>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <li><a href="/?page=post&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </section>

<?php
}
}
/* {/block 'content'} */
}
