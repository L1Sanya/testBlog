<?php
/* Smarty version 4.5.6, created on 2026-02-06 10:53:09
  from '/var/www/html/resources/views/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6985c815adbcf6_52985783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '062bb46d9b260ee80ce8f1153b647cac9fdf3f6e' => 
    array (
      0 => '/var/www/html/resources/views/category.tpl',
      1 => 1770375154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6985c815adbcf6_52985783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20469330486985c815ad1fa0_70862438', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_20469330486985c815ad1fa0_70862438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20469330486985c815ad1fa0_70862438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <div class="category-hero">
        <h2><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>
        <div class="category-stats">
            <span><i class="fas fa-newspaper"></i> Всего статей: <?php echo $_smarty_tpl->tpl_vars['total_pages']->value*(($tmp = 10 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</span>
        </div>
    </div>

    <div class="sort-controls">
        <form method="get" class="sort-form">
            <label><i class="fas fa-sort-amount-down"></i> Сортировать по:</label>
            <select name="sort" onchange="this.form.submit()" class="sort-select">
                <option value="date" <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'date') {?>selected<?php }?>>Дате публикации</option>
                <option value="views" <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'views') {?>selected<?php }?>>Просмотрам</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
        </form>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
        <div class="category-posts">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <article class="post-item">
                    <h3><a href="/post?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>
                    <p class="post-excerpt"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['content'],150,"...");?>
</p>
                    <div class="post-item-footer">
                        <div class="post-item-stats">
                            <span><i class="fas fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
</span>
                            <span><i class="far fa-calendar"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['created_at'],"%d.%m.%Y");?>
</span>
                        </div>
                        <a href="/post?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="read-link">
                            Читать <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <div class="no-posts">
            <i class="fas fa-newspaper fa-3x"></i>
            <h3>В этой категории пока нет статей</h3>
            <a href="/" class="btn">Вернуться на главную</a>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['total_pages']->value > 1) {?>
        <div class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
                <a href="/category?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" class="page-prev">
                    <i class="fas fa-chevron-left"></i> Назад
                </a>
            <?php }?>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>
                    <span class="page-current"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                <?php } else { ?>
                    <a href="/category?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" class="page-link"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                <?php }?>
            <?php }
}
?>

            <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
                <a href="/category?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" class="page-next">
                    Вперед <i class="fas fa-chevron-right"></i>
                </a>
            <?php }?>
        </div>
    <?php }
}
}
/* {/block "content"} */
}
