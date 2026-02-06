<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Post;
use App\Models\Category;

class CategoryController
{
    public function show(int $id)
    {
        $category = Category::find($id);

        if (!$category) {
            http_response_code(404);
            echo "Категория не найдена";
            return;
        }

        $page = max(1, (int)($_GET['page'] ?? 1));
        $sort = $_GET['sort'] ?? 'date';

        $limit = 10;
        $offset = ($page - 1) * $limit;

        $posts = Post::byCategory($id, $sort, $limit, $offset);
        $total = Post::countByCategory($id);

        View::render('category', [
            'category' => $category,
            'posts' => $posts,
            'current_page' => $page,
            'total_pages' => ceil($total / $limit),
            'sort' => $sort
        ]);
    }
}