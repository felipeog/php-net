<?php

class Database
{
    public $connection;

    public function __construct($dsn, $credentials)
    {
        $dsnString = 'mysql:' . http_build_query($dsn, '', ';');

        $this->connection = new PDO($dsnString, $credentials['username'], $credentials['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
