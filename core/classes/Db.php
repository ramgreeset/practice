<?php

class Db
{
    private $connection;
    private $statement;

    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";

        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        } catch (PDOException $e) {
            abort(500);
        }

    }

    public function query($query)
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute();
        return $this;
    }
    public function findAll(){
        return 'test';
    }
}