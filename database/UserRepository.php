<?php

class UserRepository extends Repository
{
    protected static string $table = 'users';

    protected static string $primaryKey = 'id';

    public function create(array $array)
    {
        $query = 'INSERT INTO `'. self::$table . '`';
        $fields = array_keys($array);

        $query .= '(`' . implode('`, `', $fields) . '`)';
        $query .= ' VALUES (:' . implode(', :', $fields) . ')';

        $connect = $this->getConnector();
        $stmt = $connect->prepare($query);
        $stmt->execute($array);
    }

    public function auth(string $email, string $password): object|false
    {
        $query = "SELECT `id`, `email`, `password` FROM `users` WHERE `email` = :email AND `deleted_at` IS NULL";

        $connect = $this->getConnector();
        $stmt = $connect->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return false;
    }

    public function createSession(int $userId, string $token): void
    {
        $query = "INSERT INTO `users_sessions`(`user_id`, `token`) VALUES ($userId, '$token')";

        $connect = $this->getConnector();
        $connect->exec($query);
    }

    public function getSession(string $token): object|false
    {
        $query = "SELECT * FROM `users_sessions` WHERE `token` = :token LIMIT 1";
        $connect = $this->getConnector();
        $stmt = $connect->prepare($query);
        $stmt->execute(['token' => $token]);

        return $stmt->fetch();
    }

    public function deleteSession(int $userId)
    {
        $query = "DELETE FROM `users_sessions` WHERE `user_id` = $userId";
        $connect = $this->getConnector();
        $connect->exec($query);
    }
}