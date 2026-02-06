<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\User;

class AuthController
{
    public function showLogin()
    {
        View::render('auth/login');
    }

    public function showRegister()
    {
        View::render('auth/register');
    }

    public function register()
    {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (!$email || !$password) {
            exit('Email и пароль обязательны');
        }

        User::create($email, $password);

        header('Location: /login');
        exit;
    }

    public function login()
    {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        $user = User::findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {
            exit('Неверный логин или пароль');
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        header('Location: /');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}
