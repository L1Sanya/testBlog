<?php
/* Smarty version 4.5.6, created on 2026-02-06 10:52:50
  from '/var/www/html/resources/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6985c802368612_99925580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3af30002a920669a2380d8f65021a00254eb68ae' => 
    array (
      0 => '/var/www/html/resources/views/home.tpl',
      1 => 1770375124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6985c802368612_99925580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12964877736985c802363b67_75237309', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_12964877736985c802363b67_75237309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12964877736985c802363b67_75237309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

    <div class="container">
        <h1>Категории статей</h1>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <section class="category-section">
                <div class="category-header">
                    <div class="category-info">
                        <h2><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>
                    </div>
                    <a href="/category?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="view-all-btn">
                        <i class="fas fa-arrow-right"></i> Все статьи
                    </a>
                </div>

                <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['posts'])) {?>
                    <div class="posts-row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                            <div class="post-card">
                                <div class="post-img">
                                    <img src="/images/placeholder.png" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
                                </div>
                                <div class="post-content">
                                    <h3><a href="/post?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>
                                    <p class="post-excerpt"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['content'],100,"...");?>
</p>
                                    <div class="post-footer">
                                        <div class="post-stats">
                                            <span class="stat-item">
                                                <i class="fas fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>

                                            </span>
                                        </div>
                                        <a href="/post?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="read-btn">
                                            Читать <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } else { ?>
                    <div class="no-posts">
                        <p>В этой категории пока нет статей</p>
                    </div>
                <?php }?>
            </section>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
}
/* {/block "content"} */
}
