<?php

namespace Core;

class Validator {

    public static function lenVal($var, $min=1, $max = INF){
        $var = trim($var);

        return strlen($var)>=$min && strlen($var)<=$max;
    }

    public static function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}