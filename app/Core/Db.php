<?php
namespace App\Core;

use PDO;

class Db
{
    private static ?PDO $pdo = null;

    public static function get(): PDO
    {
        if (!self::$pdo) {
            $host = getenv('DB_HOST') ?: 'db';
            $dbname = getenv('DB_DATABASE') ?: 'db';
            $user = getenv('DB_USERNAME') ?: 'db';
            $pass = getenv('DB_PASSWORD') ?: 'secret';

            self::$pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $user,
                $pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }

        return self::$pdo;
    }
}
