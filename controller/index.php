<?php

    $header="Home";

    $cards = [
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
        ]
    ];

    include "views/index.view.php";