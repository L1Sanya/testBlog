<?php

use App\Controllers\CategoryController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\PostController;

/** @var Router $router */

$home = new HomeController();
$auth = new AuthController();
$post = new PostController();

$router->get('/', fn() => $home->index());
$router->get('/category', function() {
    $controller = new CategoryController();
    $controller->show((int)($_GET['id'] ?? 0));
});
$router->get('/post', function() use ($home) {
    $home->post((int)($_GET['id'] ?? 0));
});

$router->get('/login', fn() => $auth->showLogin());
$router->post('/login', fn() => $auth->login());

$router->get('/register', fn() => $auth->showRegister());
$router->post('/register', fn() => $auth->register());

$router->get('/logout', fn() => $auth->logout());

$router->post('/post-like', fn() => $post->like());