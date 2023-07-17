<?php

    use Core\Database;
    use Core\Validator;
    use Core\App;

    $config = require base_path('config.php');

    $header="Edit your note";     // The title for the current page and it is displayed using the title.php file
    require base_path("bootstrap.php");
    $db = App::resolve(Database::class);

    $current_user_id = 1;

    $card=$db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

    authorize($card['user_id']==$current_user_id);
    include view("edit_note.view.php");