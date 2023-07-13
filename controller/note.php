<?php

use Core\Database;

$db=new Database($config['database']);

$card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$current_user_id = 1;

/*if ($card['user_id']!=$current_user_id){
    abort(Response::FORBIDDEN);
}*/

authorize($card['user_id']==$current_user_id);

require view("note.view.php");

//dd($card);