<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

include base_path('bootstrap.php');

$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);

Session::flash('old', [
    'email' => $email
]);

$form = new LoginForm();

if ($form->validate($email, $password)){

    if ((new Authenticator)->attempt($email, $password)){
        redirect('/notesapp/');
    } 
    
    $form->error('email_password', 'Incorrect email or password');
}

Session::flash('errors', $form->_get());

redirect('/notesapp/login');
die();

