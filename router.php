<?php

$url = parse_url($_SERVER["REQUEST_URI"]);
$url = $url["path"];
$config = require "config.php";

$valid_uris =[
    "/notesapp/" => "controller/index.php",
    "/notesapp/create_notes" => "controller/create_notes.php",
    "/notesapp/login" => "controller/login.php"
];

function routeToUrl($url, $valid_uris, $config){      // adding $result_query in oreder to get the fetched results in the targeted page
    if (array_key_exists($url, $valid_uris)){
        require $valid_uris[$url];
    }else {
        abort(404);
    }
}

function abort($code){
    require "views/{$code}.php";
}

routeToUrl($url, $valid_uris, $config);