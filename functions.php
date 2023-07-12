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