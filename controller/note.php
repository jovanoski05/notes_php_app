<?php

$db=new Database($config['database']);

$card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->fetch();

if (!$card){
    abort();
} else {
    require "views/note.view.php";
}

//dd($card);