<?php
/*return [
    "/notesapp/" => base_path("controller/index.php"),
    "/notesapp/note/create" => base_path("controller/create_notes.php"),
    "/notesapp/login" => base_path("controller/login.php"),
    "/notesapp/note" => base_path("controller/note.php")
];*/

$router->get('/notesapp/', "controller/index.php");

$router->get('/notesapp/note/create', "controller/create_notes.php");
$router->post('/notesapp/note/create', "controller/store.php");

$router->get('/notesapp/login', "controller/login.php");


$router->get('/notesapp/note', "controller/note.php");
$router->delete('/notesapp/note', "controller/destroy.php");

$router->get('/notesapp/note/edit', 'controller/edit_note.php');
$router->patch('/notesapp/note/edit', 'controller/update.php');

$router->get('/notesapp/signup', 'controller/signup.php');