<?php declare(strict_types=1);
namespace App;
use App\DB;
use App\ROUTER\Router;

class App{
    private static DB $db;
    // private Router $router;
    public function __construct(private Router $router){
        // session_start();
        echo $this->router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
    }
    public static function db():DB{
        static::$db=new DB();
        return static::$db;
    }
    public function run(){

    }

}