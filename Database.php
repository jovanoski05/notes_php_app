<?php

class Database{
    public $connection;           //connection to the database

    public function __construct($config, $user='root', $password='')        //$config is the custom configuration of the database
    {                                                                       //You can edit the configuration in config.php file
        $dsn = "mysql:". http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password);
    }

    public function query($query, $params=[]){      //$query is the query that will be executed
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;

    }
}