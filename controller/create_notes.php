<?php

    use Core\Database;
    use Core\Validator;
    use Core\App;

    $config = require base_path('config.php');

    $header="Create your new note";     // The title for the current page and it is displayed using the title.php file
    require base_path("bootstrap.php");
    $db = App::resolve(Database::class);
    include view("create_notes.view.php");  