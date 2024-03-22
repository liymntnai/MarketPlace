<?php
namespace App\Controller;
use App\Authentications\UserAuthentication;
use App\View;

class AdvertiseController{
    public function __construct(protected UserAuthentication $userAuthentication){
   

    }
    public function index(){
        if ($this->userAuthentication->verified()){
            // $this->userAuthentication->verify();
        return View::make('/Advertise2.php');
        }
        else {
            header("Location: /index.php");
        }
    }
}