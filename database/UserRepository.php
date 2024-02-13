<?php

class UserRepository extends Repository
{
    protected static string $table = 'users';

    protected static string $primaryKey = 'id';

    public static function create(array $array)
    {
        $query = 'INSERT INTO `'. self::$table . '`';
        $fields = array_keys($array);

        $query .= '(`' . implode('`, `', $fields) . '`)';
        $query .= ' VALUES (:' . implode(', :', $fields) . ')';

        echo $query;
    }
}