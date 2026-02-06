<?php
/* Smarty version 4.5.6, created on 2026-02-06 09:34:19
  from '/var/www/html/resources/views/auth/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6985b59b164332_47035773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0653c5baa852dd60f2afef444d561303853b425' => 
    array (
      0 => '/var/www/html/resources/views/auth/login.tpl',
      1 => 1770370145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6985b59b164332_47035773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7180504926985b59b163bf3_88974109', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_7180504926985b59b163bf3_88974109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7180504926985b59b163bf3_88974109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="max-width: 400px; margin: 0 auto;">
        <h2 style="color: #2d3748; text-align: center; margin-bottom: 2rem;">Вход</h2>

        <form method="post" action="/login" style="display: flex; flex-direction: column; gap: 1rem;">
            <input type="email" name="email" placeholder="Email" required style="padding: 12px; border: 2px solid #e2e8f0; border-radius: 5px;">
            <input type="password" name="password" placeholder="Пароль" required style="padding: 12px; border: 2px solid #e2e8f0; border-radius: 5px;">
            <button type="submit" style="background: #667eea; color: white; border: none; padding: 12px; border-radius: 5px; cursor: pointer;">Войти</button>
        </form>

        <p style="text-align: center; margin-top: 1rem; color: #718096;">
            Нет аккаунта? <a href="/register" style="color: #667eea;">Регистрация</a>
        </p>
    </div>
<?php
}
}
/* {/block 'content'} */
}
