<?php

namespace App\Controllers;

use App\Models\Post;

class PostController
{
    public function like()
    {
        header('Content-Type: application/json');

        if (!isset($_SESSION['user_id'])) {
            echo json_encode([
                'success' => false,
                'message' => 'Для лайка нужно войти в систему'
            ]);
            exit;
        }

        $postId = (int)($_POST['post_id'] ?? 0);
        $userId = $_SESSION['user_id'];

        if ($postId <= 0) {
            echo json_encode([
                'success' => false,
                'message' => 'Неверный ID поста'
            ]);
            exit;
        }

        try {
            $action = Post::toggleLike($postId, $userId);
            $isLiked = Post::isLikedByUser($postId, $userId);

            echo json_encode([
                'success' => true,
                'action' => $action,
                'is_liked' => $isLiked,
                'message' => $action === 'added' ? 'Лайк поставлен!' : 'Лайк убран!'
            ]);
        } catch (\Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => 'Ошибка: ' . $e->getMessage()
            ]);
        }
        exit;
    }
}