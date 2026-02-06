<?php

namespace App\Models;

use App\Core\Db;

class Post
{
    public static function all()
    {
        return Db::get()->query("SELECT * FROM posts")->fetchAll();
    }

    public static function find(int $id)
    {
        $stmt = Db::get()->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function latestByCategory(int $categoryId)
    {
        $stmt = Db::get()->prepare("
            SELECT * FROM posts 
            WHERE category_id = ?
            ORDER BY created_at DESC
            LIMIT 3
        ");
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll();
    }

    public static function toggleLike(int $postId, int $userId)
    {
        $db = Db::get();

        $stmt = $db->prepare("SELECT id FROM post_likes WHERE post_id = ? AND user_id = ?");
        $stmt->execute([$postId, $userId]);
        $existing = $stmt->fetch();

        if ($existing) {
            $stmt = $db->prepare("DELETE FROM post_likes WHERE id = ?");
            $stmt->execute([$existing['id']]);
            return 'removed';
        } else {
            $stmt = $db->prepare("INSERT INTO post_likes (post_id, user_id) VALUES (?, ?)");
            $stmt->execute([$postId, $userId]);
            return 'added';
        }
    }

    public static function isLikedByUser(int $postId, int $userId): bool
    {
        $db = Db::get();
        $stmt = $db->prepare("SELECT 1 FROM post_likes WHERE post_id = ? AND user_id = ?");
        $stmt->execute([$postId, $userId]);
        return (bool)$stmt->fetchColumn();
    }

    public static function byCategory(
        int    $categoryId,
        string $sort,
        int    $limit,
        int    $offset
    )
    {
        $order = $sort === 'views' ? 'views DESC' : 'created_at DESC';

        $db = Db::get();
        $stmt = $db->prepare("
            SELECT * FROM posts
            WHERE category_id = ?
            ORDER BY {$order}
            LIMIT {$limit} OFFSET {$offset}
        ");

        $stmt->execute([$categoryId]);
        return $stmt->fetchAll();
    }

    public static function countByCategory(int $categoryId)
    {
        $db = Db::get();
        $stmt = $db->prepare("SELECT COUNT(*) FROM posts WHERE category_id = ?");
        $stmt->execute([$categoryId]);
        return $stmt->fetchColumn();
    }

    public static function incrementViews(int $id)
    {
        $db = Db::get();
        $stmt = $db->prepare("UPDATE posts SET views = views + 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    public static function similar(int $categoryId, int $excludeId)
    {
        $db = Db::get();
        $stmt = $db->prepare("
            SELECT * FROM posts
            WHERE category_id = ? AND id != ?
            ORDER BY created_at DESC
            LIMIT 3
        ");
        $stmt->execute([$categoryId, $excludeId]);
        return $stmt->fetchAll();
    }

}