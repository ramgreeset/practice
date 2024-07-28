<?
abstract class DatabaseFactory
{
    abstract protected function createConnection($db_config);

    public function getConnection($db_config)
    {
        return $this->createConnection($db_config);
    }
}