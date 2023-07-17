<?php
use Core\Validator;
use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$errors=[];

include base_path('bootstrap.php');

$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);

$form = new LoginForm();

if (!$form->validate($email, $password)){
    $errors=$form->_get();
    require view("login.view.php", $errors);
    die();
}

$db = App::resolve(Database::class);

$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

if (!$user || !password_verify($password, $user['password'])){
    $errors['email_password'] = "Incorrect email or password";
    require view("login.view.php");
    die();
}

login($user['username']);
header('location: /notesapp/');
exit();
