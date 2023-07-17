<?php

    use Core\Database;
    use Core\App;
    
    $header="Hi ". ($_SESSION['username'] ?? 'Guest') .", these are your notes ";
    require base_path("bootstrap.php");
    $db = App::resolve(Database::class);

    $cards=$db->query("SELECT * FROM notes WHERE user_id=1")->findAll();
    //Custom cards used now for the demo 
    //This will be deleted soon
    /*$cards = [
        0 => [
            'title' => 'First title',
            'subtitle' => 'First subtitle',
            'content' => 'This is some content that will be displayed on the card',
            'date' => '10-07-2023'
        ],
        1 => [
            'title' => 'Second title',
            'subtitle' => 'Second subtitle',
            'content' => 'This is some content that will be displayed on the card',
            'date' => '10-07-2023'
        ],
        2 => [
            'title' => 'Third title',
            'subtitle' => '',
            'content' => 'This is some content that will be displayed on the card',
            'date' => '10-07-2023'
        ]
    ];*/
    //--------------
    //Declaring cards to be equal to the result query - Later I will optimize the query
    include view("index.view.php");