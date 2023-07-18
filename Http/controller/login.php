<?php

use Core\Session;

$errors=[];

$email = old('email');

//dd($_SESSION);

//dd($_SESSION['_flash']);

$errors=Session::get('errors');

require view("login.view.php", [
    'errors' => $errors
]);
//Session::unflash('errors');