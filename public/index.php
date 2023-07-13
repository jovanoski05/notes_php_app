<?php

    const BASE_PATH = __DIR__ . '/../';
    //var_dump(BASE_PATH);
    include BASE_PATH ."functions.php";
    
    require base_path("Database.php");
    require base_path("Response.php");
    //dd($_GET['id']);
    //dd($res);
    require base_path("router.php");

