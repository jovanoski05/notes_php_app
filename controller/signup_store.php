<?php

use Core\Validator;

$email=htmlspecialchars($_POST['email']);
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$confirm_password=htmlspecialchars($_POST['confirm_password']);

$errors=[];

if (!Validator::email($email)){
    $errors['email'] = "Please provide a valid email address";
}

if (!Validator::match($password, $confirm_password)){
    $errors['matching_passwords'] = "Passwords don't match";
}

if (!Validator::lenVal($confirm_password, 8, 255)){
    $errors['confirm_password'] = "Please write a password between 8 and 255 characters";
}

if (!Validator::lenVal($password, 8, 255)){
    $errors['password'] = "Please write a password between 8 and 255 characters";
}

if (!Validator::lenVal($username, 1)){
    $errors['username'] = "Please provide a valid username";
}

if (!empty($errors)){
   //dd($errors);
    require view("signup.view.php", $errors);
    die();
}
