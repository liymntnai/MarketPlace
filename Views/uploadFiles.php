<?php declare(strict_types=1);

var_dump($_POST);
// echo '<pre>';
$images = '';
foreach($_FILES['files']['name'] as $image){
    $images .= $image.',';
}
var_dump($images);
// var_dump(($_FILES['files']['name']));

// echo '</pre>';

$tmp_names = $_FILES['files']['tmp_name'];
$file_names = $_FILES['files']['name'];
for($i=0; $i<count($tmp_names); $i++){
    move_uploaded_file($tmp_names[$i], __DIR__ . '/uploads/' . $_POST['category'].'/'.$file_names[$i]);
}
// mkdir($_POST['category']);

dirname('sd');
if(dir(__DIR__.'/uploads/'.$_POST['category'])){
    echo 'file ' .__DIR__.'/uploads/'.$_POST['category'] . ' exists';
}



use App\Entity\Post;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use App\Product;

require_once __DIR__.'/vendor/autoload.php';

$config = ORMSetUp::createAttributeMetadataConfiguration(
    [__DIR__ . '/App/Entity'],
    isDevMode: true
); // returns Configuration

$connectionParams = [
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host' => $_ENV['DB_HOST'],
    'driver' => $_ENV['DB_DRIVER']
];
// configuring the database connection
$connection = DriverManager::getConnection($connectionParams, $config);

$entityManager = new EntityManager($connection, $config);

$post = (new Post())
    ->setPostTitle($_POST['title'])
    ->setPostTown($_POST['town'])
    ->setPostAddress($_POST['address'])
    ->setPostPrice($_POST['price'])
    ->setPostImages($images)
    ->setPostAddress($_POST['address'])
    ->setPostDate(new DateTime);

  

$entityManager->persist($post);
$entityManager->flush();

echo '<h2 style="color:green">Post uploaded succesfully</h2>';