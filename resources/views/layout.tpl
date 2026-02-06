<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default:'Блог'}</title>

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
                {if isset($smarty.session.user_id)}
                    <li class="nav-item">
                            <span class="nav-link text-primary">
                                <i class="fas fa-user"></i>
                                {if isset($smarty.session.user_name)}
                                    {$smarty.session.user_name}
                                {else}
                                    Пользователь
                                {/if}
                            </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Выйти</a>
                    </li>
                {else}
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Регистрация</a>
                    </li>
                {/if}
            </ul>
        </div>
    </div>
</nav>

<!-- Основной контент -->
<main>
    {block name="content"}{/block}
</main>

<!-- Футер -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <p>TEST ABELOHOST</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Ваш JavaScript -->
<script src="/js/script.js"></script>
</body>
</html>