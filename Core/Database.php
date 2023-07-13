<?php

namespace Core;

use PDO;

class Database{
    public $connection;   
    public $statement;        //connection to the database

    public function __construct($config, $user='root', $password='')        //$config is the custom configuration of the database
    {                                                                       //You can edit the configuration in config.php file
        $dsn = "mysql:". http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params=[]){      //$query is the query that will be executed
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findAll(){
        return $this->statement->fetchAll();
    }

    public function findOrFail(){
        $resuilt = $this->find();

        if (!$resuilt){
            abort();
        }

        return $resuilt;
    }
}