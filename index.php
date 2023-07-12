<?php

    require "Database.php";
    include "functions.php";
    //dd($_GET['id']);
    $config=require "config.php";
    $db=new Database($config['database']);
    $query="SELECT * FROM notes";
    $res=$db->query($query)->fetchall(PDO::FETCH_ASSOC);        //result from the fetched query
    //dd($res);
    require "router.php";

