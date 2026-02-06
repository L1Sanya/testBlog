<?php
/* Smarty version 4.5.6, created on 2026-02-06 11:24:45
  from '/var/www/html/resources/views/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6985cf7d735326_99433651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3152edcceef8013295a0ddf6818d76cec8efaf07' => 
    array (
      0 => '/var/www/html/resources/views/layout.tpl',
      1 => 1770377084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6985cf7d735326_99433651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'Блог' ?? null : $tmp);?>
</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Ваши стили -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Обновление кэша -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>
<!-- Навигация -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-blog"></i> Блог
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <?php if ((isset($_SESSION['user_id']))) {?>
                    <li class="nav-item">
                            <span class="nav-link text-primary">
                                <i class="fas fa-user"></i>
                                <?php if ((isset($_SESSION['user_name']))) {?>
                                    <?php echo $_SESSION['user_name'];?>

                                <?php } else { ?>
                                    Пользователь
                                <?php }?>
                            </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Выйти</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Регистрация</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>

<!-- Основной контент -->
<main>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2943617816985cf7d734ed8_41780150', "content");
?>

</main>

<!-- Футер -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <p>TEST ABELOHOST</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- Ваш JavaScript -->
<?php echo '<script'; ?>
 src="/js/script.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "content"} */
class Block_2943617816985cf7d734ed8_41780150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2943617816985cf7d734ed8_41780150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
