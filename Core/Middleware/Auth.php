<?php

namespace Core\Middleware;

class Auth{
    
    public function handle(){
        if (!isset($_SESSION['username'])){
            header('location: /notesapp/login');
            exit();
        }
    }

}