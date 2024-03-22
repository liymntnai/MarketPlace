<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table('category')]
class Category
{

    #[Id, Column, GeneratedValue]
    private int $cat_id;
    #[Column]
    private string $cat_name;
    #[OneToMany(targetEntity: Post::class, mappedBy:'category_id')]
    private Collection $posts;

    public function __construct(){
        $this->posts = new ArrayCollection();
    }


    public function getId(): int {return $this->cat_id;}

	public function getName(): string {return $this->cat_name;}

	public function setId(int $cat_id): void {$this->cat_id = $cat_id;}

	public function setName(string $cat_name): void {$this->cat_name = $cat_name;}

	public function addPost(Post $post){
        // $this->posts[] = $post;
        $this->posts->add($post);
        //  = $post;
    }
    // public function addCategory(Category $category){
    //     $this->
    // }
}