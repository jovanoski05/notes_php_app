<?php

class Validator {

    public static function lenVal($var, $min=1, $max = INF){
        $var = trim($var);

        return strlen($var)>=$min && strlen($var)<=$max;
    }

}