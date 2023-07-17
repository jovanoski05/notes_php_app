<?php

$router->get('/notesapp/', "index.php")->only("auth");

$router->get('/notesapp/note/create', "create_notes.php")->only("auth");
$router->post('/notesapp/note/create', "store.php");

$router->get('/notesapp/login', "login.php")->only("guest");
$router->post('/notesapp/login', "login_store.php")->only("guest");
$router->delete('/notesapp/logout', 'logout.php')->only('auth');

$router->get('/notesapp/note', "note.php")->only("auth");
$router->delete('/notesapp/note', "destroy.php");

$router->get('/notesapp/note/edit', 'edit_note.php')->only("auth");
$router->patch('/notesapp/note/edit', 'update.php');

$router->get('/notesapp/signup', 'signup.php')->only("guest");
$router->post('/notesapp/signup', 'signup_store.php');