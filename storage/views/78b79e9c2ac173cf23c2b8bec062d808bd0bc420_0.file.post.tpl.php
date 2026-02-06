<?php
/* Smarty version 4.5.6, created on 2026-02-06 11:13:42
  from '/var/www/html/resources/views/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6985cce6355782_30322381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b79e9c2ac173cf23c2b8bec062d808bd0bc420' => 
    array (
      0 => '/var/www/html/resources/views/post.tpl',
      1 => 1770376393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6985cce6355782_30322381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20112115716985cce6353a69_56792677', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_20112115716985cce6353a69_56792677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20112115716985cce6353a69_56792677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <article class="post-detail">
            <div class="post-header">
                <h1><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
                <div class="post-meta">
                    <span class="meta-item">
                        <i class="fas fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
 просмотров
                    </span>
                    <a href="/category?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['category_id'];?>
" class="category-link">
                        <i class="fas fa-folder"></i> К категории
                    </a>
                </div>
            </div>

            <div class="post-content">
                <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

            </div>

            <div class="post-actions">
                <div class="like-section">
                    <?php if ((isset($_SESSION['user_id']))) {?>
                        <button class="like-btn" data-post-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" id="like-btn-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['is_liked']) {?>
                                <i class="fas fa-heart" style="color: #ff4757;"></i>
                            <?php } else { ?>
                                <i class="far fa-heart"></i>
                            <?php }?>
                        </button>
                    <?php } else { ?>
                        <a href="/login" class="like-btn" style="text-decoration: none;">
                            <i class="far fa-heart"></i>
                        </a>
                    <?php }?>
                </div>

                <div class="navigation-buttons">
                    <a href="/" class="btn btn-back">
                        <i class="fas fa-arrow-left"></i> На главную
                    </a>
                    <a href="/category?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['category_id'];?>
" class="btn btn-category">
                        <i class="fas fa-folder"></i> Все статьи категории
                    </a>
                </div>
            </div>
        </article>
    </div>
<?php
}
}
/* {/block "content"} */
}
