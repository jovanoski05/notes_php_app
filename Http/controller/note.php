<?php

use Core\Database;
use Core\App;

$config = require base_path('config.php');

require base_path("bootstrap.php");
$db = App::resolve(Database::class);

$current_user_id = 1;

$card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($card['user_id']==$current_user_id);

require view("note.view.php");

//dd($card);
