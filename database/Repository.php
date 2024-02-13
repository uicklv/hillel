<?php

class Repository
{
    protected static string $table = '';

    protected static string $primaryKey = 'id';

    private PDO $connector;

    public function __construct(PDO $connector)
    {
        $this->setConnector($connector);
    }

    public function find(int $id): bool|object
    {
        if (empty(static::$table)) {
            throw new Exception('Table is empty');
        }

        $sql = "SELECT * FROM `" . static::$table . "` WHERE `" . static::$primaryKey . "` = :id";
        $connect = $this->getConnector();
        $stmt = $connect->prepare($sql);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch();

        return $user;
    }

    /**
     * @param PDO $connector
     */
    public function setConnector(PDO $connector): void
    {
        $this->connector = $connector;
    }

    /**
     * @return PDO
     */
    public function getConnector(): PDO
    {
        return $this->connector;
    }
}
