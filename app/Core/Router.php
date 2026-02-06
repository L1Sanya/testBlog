<?php

namespace App\Core;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get(string $path, callable $handler)
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, callable $handler)
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(string $method, string $uri)
    {
        $path = parse_url($uri, PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            call_user_func($this->routes[$method][$path]);
            return;
        }

        if ($method === 'GET' && preg_match('#^/category/(\d+)$#', $path, $matches)) {
            $id = (int)$matches[1];
            if (isset($this->routes['GET']['/category/(\d+)'])) {
                $_GET['id'] = $id;
                call_user_func($this->routes['GET']['/category/(\d+)']);
                return;
            }
        }

        if ($method === 'GET' && preg_match('#^/category/(\d+)/post/(\d+)$#', $path, $matches)) {
            $categoryId = (int)$matches[1];
            $postId = (int)$matches[2];
            // Ищем обработчик
            if (isset($this->routes['GET']['/category/(\d+)/post/(\d+)'])) {
                $_GET['category_id'] = $categoryId;
                $_GET['post_id'] = $postId;
                call_user_func($this->routes['GET']['/category/(\d+)/post/(\d+)']);
                return;
            }
        }

        http_response_code(404);
        echo '404 Not Found: ' . htmlspecialchars($path);
    }
}