<?php

use Core\Response;

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function abort($code=404){
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $code=Response::FORBIDDEN){
    if (!$condition){
        abort($code);
    }
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract($attributes);

    return base_path('views/'. $path);
}

function login($user)
{
    $_SESSION['username'] = $user;

    session_regenerate_id(true);
}

function logout(){
    $_SESSION = [];
    session_destroy();
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', "", time()-3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}