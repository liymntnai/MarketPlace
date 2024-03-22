<?php 
declare(strict_types=1);

require_once __DIR__ ."/../vendor/autoload.php";

use App\App;
use App\Controller\AdvertiseController;
use App\Controller\HomeController;
use App\Controller\ListingController;
use App\Entity\Category;
use App\Entity\Post;
use App\Entity\User;
use App\ROUTER\Router;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;

define('VIEW_PATH', __DIR__ .'/../Views');
define('STORAGE_PATH', __DIR__ .'/../Views/Storage');

$dotenv= Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$router=new Router();

$router
    ->register('/index.php', [HomeController::class, 'index'])
    ->register('/public/car', [ListingController::class, 'list_car'])
    ->register('/public/smartphone', [ListingController::class, 'list_smartphone'])
    ->register('/public/housing-renting', [ListingController::class, 'list_house'])
    ->register('/public/laptop', [ListingController::class, 'list_pc'])
    ->register('/public/electrical', [ListingController::class, 'list_electrical'])
    ->register('/public/clothing', [ListingController::class, 'list_clothing'])
    ->register('/advertise', [AdvertiseController::class, 'index']);

(new App($router));


// $connectionParams = [
//     'dbname' => $_ENV['DB_NAME'],
//     'user' => $_ENV['DB_USER'],
//     'password' => $_ENV['DB_PASS'],
//     'host' => $_ENV['DB_HOST'],
//     'driver' => $_ENV['DB_DRIVER'],
// ];

// $config = \Doctrine\ORM\ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/App/Entity']);
// $connection = DriverManager::getConnection($connectionParams);


// $entityManager = new EntityManager($connection, $config);

// $user = (new User())
//     ->setUserEmail('Ddjkldf@gmail.com')
//     ->setUserFname('dkid')
//     ->setUserLname('Ben')
//     ->setUserPhone('676150045')
//     ->setUserPass('321')
//     ->setUserPhoto('photo-djoko.jpg');

// $entityManager->persist($user);
// $entityManager->flush();

// $post = (new Post())
//     ->setPostTitle('iphone xr')
//     ->setPostPrice('60000')
//     ->setPostTown('Douala')
//     ->setPostAddress('Mbopi')
//     ->setPostImages('phone1.jpg,phone2.jpg,phone3.jpg')
//     ->setPostDescription('Iphoen xr for sale')
//     ->setPostDate(new \DateTime());

// // $categoryId = $connection
// //     ->executeQuery('SELECT cat_id from category
// //      where cat_name =?', ['cars'])
// //     ->fetchAssociative()['cat_id'];

// $category = 
// new Category();
// // $category->setId(10);
// $category->setName('jobs');
// $category->addPost($post);
// //  $entityManager->find(Category::class, 10);

// $user->addPost($post);
// $category ->addPost($post);
// // $post->setCategory($category);

// // $product = $entityManager->find("Product", $productId);
// // $bug->assignToProduct($product);

// $entityManager->persist($post);
// $entityManager->flush();


