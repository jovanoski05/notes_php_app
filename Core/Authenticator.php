<?php

namespace Core;

use Core\Session;

class Authenticator{
    
    public function attempt($email, $password){

        $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email = :email", [
            'email' => $email
        ])->find();
        if ($user){
            if (password_verify($password, $user['password'])){
                $this->login($user['username']);
                return true;
            }

            return false;
        }        
        

    }

    public function login($user)
    {
        Session::put('username', $user);

        session_regenerate_id(true);
    }

    public function logout(){
        Session::destroy();

    }

}