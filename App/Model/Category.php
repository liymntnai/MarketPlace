<?php declare(strict_types=1);
namespace App\Model;

use App\Entity\Post;
use App\Entity\User;
use App\Model;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;

class Category extends Model {
    
    public function search($category){

        $list = $this->db
        ->execute('SELECT * from post
         where cat_id =?', ['10'])
        ->fetchAllAssociative();
    // $list = $this->db->findAllAssociative(Category::class, 10);
        // $stmt=$this->db->prepare("SELECT * FROM post inner join category on post.cat_id=category.cat_id WHERE cat_name='$category'");

        // $stmt->execute([$category]);
        // $list = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // var_dump($list);
        return $list;
    }
    public function run(){
        $connectionParams = [
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
        ];

        $config = \Doctrine\ORM\ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/App/Entity']);
$connection = DriverManager::getConnection($connectionParams);


$entityManager = new EntityManager($connection, $config);

        $user = (new User())
            ->setUserEmail('johndoe@gmail.com')
            ->setUserFname('John')
            ->setUserLname('Doe')
            ->setUserPhone('681250049')
            ->setUserPass('321')
            ->setUserPhoto('photo-john.jpg');

        $entityManager->persist($user);
        $entityManager->flush();

        $post = (new Post())
            ->setPostTitle('iphone xr')
            ->setPostPrice('60000')
            ->setPostTown('Douala')
            ->setPostAddress('Mbopi')
            ->setPostImages('phone1.jpg,phone2.jpg,phone3.jpg')
            ->setPostDescription('Iphoen xr for sale')
            ->setPostDate(new \DateTime());

        $categoryId = $connection
            ->executeQuery('SELECT cat_id from category
             where cat_name =?', ['cars'])
            ->fetchAssociative()['cat_id'];
        $category = $entityManager->find(Category::class, $categoryId);
        $post->setUser($user);
        $post->setCategory($category);

        $entityManager->persist($category);
        $entityManager->flush();


    }
}
// $category = new Category();
// $category->search('cars');