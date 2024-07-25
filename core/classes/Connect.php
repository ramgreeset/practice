<?php

class Connect
{
    private $pdo;
//    private $statement;

    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";

        try {
            $this->pdo = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        } catch (PDOException $e) {
            abort(500);
        }

    }



    public function query($query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
    public function findAll(){
        return 'test';
    }
}
