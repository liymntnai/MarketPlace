<?php declare(strict_types=1);

namespace App\Exceptions;
class RouteNotFoundException extends \Exception{
   public $message = "Route not Found!";
}