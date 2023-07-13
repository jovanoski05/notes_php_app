<?php

    const BASE_PATH = __DIR__ . '/../';
    //var_dump(BASE_PATH);
    include BASE_PATH ."functions.php";
    
    spl_autoload_register(function ($class){
        require base_path($class .'.php');
    });
    //dd($_GET['id']);
    //dd($res);
    require base_path("router.php");

