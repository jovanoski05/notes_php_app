<?php

    $header="Create your new note";     // The title for the current page and it is displayed using the title.php file
    $db=new Database($config['database']);
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        //dd($_POST);
        $errors = [];

        $title = htmlspecialchars($_POST['title']);
        $subtitle=htmlspecialchars($_POST['subtitle']);
        $content=htmlspecialchars($_POST['content']);

        if (strlen($_POST['title'])==0){
            $errors['title'] = "A title is required";
        }
        if (strlen($_POST['content'])==0){
            $errors['content'] = "A content is required";
        }

        if (strlen($_POST['title'])>255){
            $errors['title']="Title cannot be longer than 255 characters";
        }

        if (strlen($_POST['subtitle'])>255){
            $errors['subtitle']="Subtitle cannot be longer than 255 characters";
        }

        if (strlen($_POST['content'])>2500){
            $errors['content']="The content cannot be longer than 2500 characters";
        }
        

        if (empty($errors)){
            $db->query("INSERT INTO notes (title, subtitle, body, date_created, user_id) VALUES (
                :title,
                :subtitle,
                :body,
                ' ". date("Y-m-d") ." ',
                '1'
            )", [
                'title' => $title,
                'subtitle' => $subtitle,
                'body' => $content
            ]);
        }
    }
    include "views/create_notes.view.php";  