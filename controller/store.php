<?php

use Core\Database;
use Core\Validator;
use Core\App;
$config = require base_path('config.php');

$header="Create your new note";     // The title for the current page and it is displayed using the title.php file
require base_path("bootstrap.php");
$db = App::resolve(Database::class);

//dd($_POST);
$errors = [];

$title = htmlspecialchars($_POST['title']);
$subtitle=htmlspecialchars($_POST['subtitle']);
$content=htmlspecialchars($_POST['content']);

if (!Validator::lenVal($title, 1, 255)){
    $errors['title'] = "A title of maximum 255 characters is required";
}
if (!Validator::lenVal($content, 1, 2500)){
    $errors['content'] = "A content of maximum 2500 characters is required";
}

if (!Validator::lenVal($subtitle, 0, 255)){
    $errors['subtitle']="Subtitle cannot be longer than 255 characters";
}

if (!empty($errors)){
    return view("create_notes.view.php");
}

if (empty($errors)){
    $db->query("INSERT INTO notes (title, subtitle, body, date_created, user_id) VALUES (
            :title,
            :subtitle,
            :body,
            ' ". date("Y-m-d") ." ',
            '1'
        )", [
            'title' => $title,
            'subtitle' => $subtitle,
            'body' => $content
    ]);

    header('location: /notesapp/');
    die();
}
