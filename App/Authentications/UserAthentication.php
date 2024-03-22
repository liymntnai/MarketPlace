<?php
namespace App\Authentications;

class UserAuthentication{
    public function verified(){
        if(isset($_SESSION['user'])){
            return true;
        }
        return false;

    }
}