<?php

namespace App\Models;

use App\Core\Db;
use PDO;

class User
{
    public static function create(string $email, string $password): bool
    {
        $stmt = Db::get()->prepare("
            INSERT INTO users (email, password, created_at)
            VALUES (?, ?, NOW())
        ");

        return $stmt->execute([
            $email,
            password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    public static function findByEmail(string $email): ?array
    {
        $stmt = Db::get()->prepare("
            SELECT * FROM users WHERE email = ?
        ");
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }
}
