<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Category;
use App\Models\Post;

class HomeController
{
    public function index()
    {
        $categories = Category::all();

        foreach ($categories as &$cat) {
            $cat['posts'] = Post::latestByCategory($cat['id']);
        }

        View::render('home', [
            'categories' => $categories
        ]);
    }

    public function post(int $id)
    {
        $post = Post::find($id);

        if (!$post) {
            http_response_code(404);
            echo "Пост не найден";
            return;
        }

        Post::incrementViews($id);

        if (isset($_SESSION['user_id'])) {
            $post['is_liked'] = Post::isLikedByUser($id, $_SESSION['user_id']);
        }

        View::render('post', [
            'post' => $post
        ]);
    }
}