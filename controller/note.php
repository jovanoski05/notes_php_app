<?php

use Core\Database;

$config = require base_path('config.php');

$db=new Database($config['database']);

$current_user_id = 1;

$card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($card['user_id']==$current_user_id);

require view("note.view.php");

//dd($card);
