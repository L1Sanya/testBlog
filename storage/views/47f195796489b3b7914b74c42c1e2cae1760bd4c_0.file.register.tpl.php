<?php
/* Smarty version 4.5.6, created on 2026-02-06 09:21:50
  from '/var/www/html/resources/views/auth/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6985b2ae3c0df5_58192866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f195796489b3b7914b74c42c1e2cae1760bd4c' => 
    array (
      0 => '/var/www/html/resources/views/auth/register.tpl',
      1 => 1770369156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6985b2ae3c0df5_58192866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10524879856985b2ae3c0319_10858308', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_10524879856985b2ae3c0319_10858308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10524879856985b2ae3c0319_10858308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="auth-container">
        <div class="auth-header">
            <h2><i class="fas fa-user-plus"></i> Регистрация</h2>
            <p>Создайте новый аккаунт</p>
        </div>

        <form method="post" action="/register" class="auth-form">
            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-envelope"></i>
                    Email адрес
                </label>
                <input type="email" name="email" class="form-input" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-lock"></i>
                    Пароль
                </label>
                <input type="password" name="password" class="form-input" placeholder="Не менее 6 символов" required minlength="6">
            </div>

            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-lock"></i>
                    Подтверждение пароля
                </label>
                <input type="password" name="password_confirm" class="form-input" placeholder="Повторите пароль" required>
            </div>

            <button type="submit" class="auth-btn">
                <i class="fas fa-user-plus"></i>
                Зарегистрироваться
            </button>
        </form>

        <div class="auth-links">
            <p>Уже есть аккаунт? <a href="/login">Войти</a></p>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const password = document.querySelector('input[name="password"]');
            const confirm = document.querySelector('input[name="password_confirm"]');

            form.addEventListener('submit', function(e) {
                if (password.value !== confirm.value) {
                    e.preventDefault();
                    showNotification('Пароли не совпадают!', 'error');
                    confirm.style.borderColor = '#ef4444';
                    return false;
                }
            });

            confirm.addEventListener('input', function() {
                if (password.value === confirm.value) {
                    confirm.style.borderColor = '#10b981';
                } else {
                    confirm.style.borderColor = '#ef4444';
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
