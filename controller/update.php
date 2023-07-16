<?php

use Core\Database;
use Core\Validator;
use Core\App;
$config = require base_path('config.php');

$header="Edit new note";     // The title for the current page and it is displayed using the title.php file
require base_path("bootstrap.php");
$db = App::resolve(Database::class);

//dd($_POST);
$errors = [];

$title = htmlspecialchars($_POST['title']);
$subtitle=htmlspecialchars($_POST['subtitle']);
$content=htmlspecialchars($_POST['content']);
$date = date("Y-m-d");

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
    require view("create_notes.view.php");
    die();
}

if (empty($errors)){
    $db->query("UPDATE notes SET 
            title = :title,
            subtitle = :subtitle,
            body = :body,
            date_created =  :date
        WHERE notes.id = :id ", [
            'id' =>  $_POST['id'],
            'title' => $title,
            'subtitle' => $subtitle,
            'body' => $content,
            'date' => strval(date("Y-m-d"))
        ]);

    header('location: /notesapp/');
    die();
}
