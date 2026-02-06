<?php

namespace App\Seeders;

use App\Core\Db;

class DatabaseSeeder
{
    public function run()
    {
        $db = Db::get();

        $db->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS categories (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                description TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content TEXT NOT NULL,
                category_id INT NOT NULL,
                views INT DEFAULT 0,
                image VARCHAR(255) DEFAULT 'placeholder.png',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS post_likes (
                id INT AUTO_INCREMENT PRIMARY KEY,
                post_id INT NOT NULL,
                user_id INT NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            )
        ");


        $db->exec("DELETE FROM post_likes");
        $db->exec("DELETE FROM posts");
        $db->exec("DELETE FROM categories");
        $db->exec("DELETE FROM users");

        $db->exec("
            INSERT INTO users (email, password, created_at, updated_at)
            VALUES ('test@test.com', '" . password_hash('123456', PASSWORD_DEFAULT) . "', NOW(), NOW())
        ");

        for ($i = 1; $i <= 5; $i++) {
            $db->exec("
                INSERT INTO categories (name, description, created_at, updated_at)
                VALUES ('КАТЕГОРИЯ $i', 'Описание категории $i', NOW(), NOW())
            ");
        }

        $images = [
            'post1.jpg', 'post2.jpg', 'post3.jpg',
            'post4.jpg', 'post5.jpg', 'post6.jpg',
            'post7.jpg', 'post8.jpg', 'post9.jpg',
            'post10.jpg', 'post11.jpg', 'post12.jpg',
            'post13.jpg', 'post14.jpg', 'post15.jpg'
        ];

        for ($i = 1; $i <= 15; $i++) {
            $category_id = ($i - 1) % 5 + 1;
            $image = $images[$i - 1];
            $db->exec("
                INSERT INTO posts (title, content, category_id, views, image, created_at, updated_at)
                VALUES ('ПОСТ $i', 'Текст поста $i', $category_id, 0, '$image', NOW(), NOW())
            ");
        }
    }
}
