<?php

$db=new Database($config['database']);

$card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->fetch();

//dd($card);

require "views/note.view.php";