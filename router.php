<?php

$url = parse_url($_SERVER["REQUEST_URI"]);
$url = $url["path"];

$valid_uris =[
    "/notesapp/" => "controller/index.php"
];

function routeToUrl($url, $valid_uris){
    if (array_key_exists($url, $valid_uris)){
        require $valid_uris[$url];
    }else {
        abort(404);
    }
}

function abort($code){
    require "views/{$code}.php";
}

routeToUrl($url, $valid_uris);