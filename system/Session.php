<?php

class Session
{
    public static function set(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get(string $key): mixed
    {
        return $_SESSION[$key] ?? null;
    }

    public static function exists(string $key): bool
    {
        $session = self::get($key);
        if (isset($session)) {
            return true;
        }

        return false;
    }

    public static function remove(string $key)
    {
        unset($_SESSION[$key]);
    }

    public static function removeValidationError($key)
    {
        unset($_SESSION['validation_errors'][$key]);
    }
}