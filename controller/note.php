<?php

$db=new Database($config['database']);

$card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->fetch();

$current_user_id=1;

if (!$card){
    abort();
}

if ($card['user_id']!=$current_user_id){
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";

//dd($card);