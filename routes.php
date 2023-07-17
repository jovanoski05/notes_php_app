<?php
/*return [
    "/notesapp/" => base_path("controller/index.php"),
    "/notesapp/note/create" => base_path("controller/create_notes.php"),
    "/notesapp/login" => base_path("controller/login.php"),
    "/notesapp/note" => base_path("controller/note.php")
];*/

$router->get('/notesapp/', "controller/index.php")->only("auth");

$router->get('/notesapp/note/create', "controller/create_notes.php")->only("auth");
$router->post('/notesapp/note/create', "controller/store.php");

$router->get('/notesapp/login', "controller/login.php")->only("guest");
$router->post('/notesapp/login', "controller/login_store.php")->only("guest");

$router->get('/notesapp/note', "controller/note.php")->only("auth");
$router->delete('/notesapp/note', "controller/destroy.php");

$router->get('/notesapp/note/edit', 'controller/edit_note.php')->only("auth");
$router->patch('/notesapp/note/edit', 'controller/update.php');

$router->get('/notesapp/signup', 'controller/signup.php')->only("guest");
$router->post('/notesapp/signup', 'controller/signup_store.php');