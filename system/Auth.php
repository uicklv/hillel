<?php

class Auth
{
    private static object $user;

    public static function setUser(object $user): void
    {
        self::$user = $user;
    }

    public static function user(): object|null
    {
        return self::$user ?? null;
    }

    public static function protect()
    {
        $token = $_COOKIE['auth'] ?? false;
        if (!$token) {
            Response::redirect(url('login'));
        }

        $connector = Connector::getInstance();
        $repository = new UserRepository($connector);
        $userSession = $repository->getSession($token);

        if ($userSession === false) {
            Response::redirect(url('login'));
        }

        $userId = $userSession->user_id;
        $user = $repository->find($userId);

        if ($user === false) {
            Response::redirect(url('login'));
        }

        Auth::setUser($user);
    }
}