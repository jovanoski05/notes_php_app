<?php

    use Core\Database;
    use Core\Validator;

    $config = require base_path('config.php');

    $header="Create your new note";     // The title for the current page and it is displayed using the title.php file
    $db=new Database($config['database']);
    include view("create_notes.view.php");  