<?php

class MySQLDatabaseFactory extends DatabaseFactory
{
    protected function createConnection($db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";

        try {
            $pdo = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        } catch (PDOException $e) {
            throw new Exception("Ошибка подключения к базе данных: " . $e->getMessage());
        }

        return $pdo;
    }
}
