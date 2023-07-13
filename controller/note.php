<?php

use Core\Database;

$db=new Database($config['database']);

$current_user_id = 1;

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();
    authorize($card['user_id']==$current_user_id);
    $db->query("DELETE FROM notes WHERE id=:id", [
        'id' => $_GET['id']
    ]);
    header('location: /notesapp/');
}else {
    $card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

    //dd($_SERVER);

    /*if ($card['user_id']!=$current_user_id){
        abort(Response::FORBIDDEN);
    }*/

    authorize($card['user_id']==$current_user_id);

    require view("note.view.php");

    //dd($card);
}