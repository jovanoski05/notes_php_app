<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

include base_path('bootstrap.php');

$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);

$form = new LoginForm();

if ($form->validate($email, $password)){

    if ((new Authenticator)->attempt($email, $password)){
        redirect('/notesapp/');
    } 
    
    $form->error('email_password', 'Incorrect email or password');
}

$errors=$form->_get();
require view("login.view.php", $errors);
die();

