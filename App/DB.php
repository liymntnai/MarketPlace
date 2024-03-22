<?php declare(strict_types=1);

namespace App;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class DB{

    
    private EntityManager $entityManager;
    public function __construct(){
        // try {
        //     $this->pdo = new \PDO("mysql:host=localhost;dbname=marketdb", "root", "12345");
        // }
        // catch(\PDOException $e){
        //     throw new \PDOException($e->getMessage());

        // }
        $connectionParams = [
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
        ];
        $connection = DriverManager::getConnection($connectionParams);
        $config = ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/Entity']);

        $this->entityManager = new EntityManager($connection, $config);

    }
    public function __call($name, $arguments){
        return call_user_func_array([$this->entityManager, $name], $arguments);
    }
}