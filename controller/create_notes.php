<?php

    $header="Create your new note";     // The title for the current page and it is displayed using the title.php file

    if ($_SERVER['REQUEST_METHOD']=="POST"){
        dd($_POST);
    }
    include "views/create_notes.view.php";  