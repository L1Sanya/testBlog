<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

session_start();

$router = new Router();
require __DIR__ . '/../app/Core/routes.php';

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

// Настройки Smarty
$smarty = new Smarty();
$smarty->setTemplateDir('../resources/views');
$smarty->setCompileDir('../storage/compiled');
$smarty->setCacheDir('../storage/cache');
$smarty->setConfigDir('../config');

// Установите базовый URL для CSS
$smarty->assign('BASE_URL', '/');
// или
$smarty->assign('APP_URL', 'http://localhost:8080'); // ваш URL