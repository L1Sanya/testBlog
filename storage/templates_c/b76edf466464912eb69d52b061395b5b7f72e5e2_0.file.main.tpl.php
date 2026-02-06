<?php
/* Smarty version 4.5.6, created on 2026-02-04 22:31:44
  from '/var/www/html/views/layouts/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6983c8d02daa45_80425665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b76edf466464912eb69d52b061395b5b7f72e5e2' => 
    array (
      0 => '/var/www/html/views/layouts/main.tpl',
      1 => 1770244302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6983c8d02daa45_80425665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Мой блог" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header>
    <h1>Мой блог</h1>
    <nav>
        <a href="/">Главная</a>
    </nav>
</header>

<main>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2490651086983c8d02da5e4_42736161', 'content');
?>

</main>

<footer>
    <p>© 2026 Мой блог</p>
</footer>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_2490651086983c8d02da5e4_42736161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2490651086983c8d02da5e4_42736161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
