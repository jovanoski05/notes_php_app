<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

include base_path('bootstrap.php');

$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);


$form = LoginForm::validate($attributes = [
   'email' => $email,
   'password' => $password
]);

$signedIn = (new Authenticator)->attempt($email, $password);

if (!$signedIn){
    $form->error('email_password', 'Incorrect email or password')
    ->throw();
} 
redirect('/notesapp/');
die();


