<?php declare(strict_types= 1);

namespace App\ROUTER;
use App\Exceptions\MethodNotFoundException;
use App\Exceptions\RouteNotFoundException;

class Router
{
   private array $routes = [];

    public function register(string $url, array|callable $routes):self
    {
        $this->routes[$url] = $routes;
        return $this;
    }
    public function resolve(string $requestUrl, string $requestMethod)
    {
        // var_dump($this->routes);
        $url = explode("?", $requestUrl)[0];
        $action = $this->routes[$url];

        if(is_callable($action)){
            return call_user_func($action);
        }
        if (!$action) {
            throw new RouteNotFoundException();
            // throw new \Exception();
        }
        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class= new $class();
                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
                throw new MethodNotFoundException("Method of given class not found");

            }

        }
    }

}