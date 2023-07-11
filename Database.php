<?php

class Database{
    public $connection;

    public function __construct($config, $user='root', $password='')
    {
        $dsn = "mysql:". http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password);
    }

    public function query($query){
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}