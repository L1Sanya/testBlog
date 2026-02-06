<?php

namespace App\Models;

use App\Core\Db;

class Category
{
    public static function all()
    {
        return Db::get()->query("SELECT * FROM categories")->fetchAll();
    }

    public static function find(int $id)
    {
        $stmt = Db::get()->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}