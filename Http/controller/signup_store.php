<?php

use Core\Validator;
use Core\App;
use Core\Database;

$email=htmlspecialchars($_POST['email']);
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$confirm_password=htmlspecialchars($_POST['confirm_password']);
require base_path("bootstrap.php");

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


$db = App::resolve(Database::class);

$users = $db->query("SELECT * FROM users WHERE email = :email OR username = :username", [
    'email' => $email,
    'username' => $username
])->find();

if ($users) {
    header('location: /notesapp/login');
    exit();
}else{
    $db->query("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)", [
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    login($username);
    header('location: /notesapp/');
    exit();
}