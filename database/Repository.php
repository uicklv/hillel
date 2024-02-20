<?php

class Repository
{
    protected static string $table = '';

    protected static string $primaryKey = 'id';

    private PDO $connector;
    private SQLQueryBuilder $builder;

    public function __construct(PDO $connector, SQLQueryBuilder $builder)
    {
        $this->setConnector($connector);
        $this->setBuilder($builder);
    }

    /**
     * @param SQLQueryBuilder $builder
     */
    public function setBuilder(SQLQueryBuilder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * @return SQLQueryBuilder
     */
    public function getBuilder(): SQLQueryBuilder
    {
        return $this->builder;
    }

    public function find(int $id): false|object
    {
        if (empty(static::$table)) {
            throw new Exception('Table is empty');
        }

//        $sql = "SELECT * FROM `" . static::$table . "` WHERE `" . static::$primaryKey . "` = :id";
        $sql = $this->builder->select(static::$table, ['*'])->where(static::$primaryKey, $id)->getSQL();
        $connect = $this->getConnector();
        $stmt = $connect->prepare($sql);
//        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute($this->builder->getValues());
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
