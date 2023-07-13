<?php

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function authorize($condition, $code=Response::FORBIDDEN){
    if (!$condition){
        Abort($code);
    }
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract($attributes);

    return base_path('views/'. $path);
}