<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;
#[Entity]
#[Table('post')]
class Post
{
    #[Id]
    #[Column]
    #[GeneratedValue]
    private int $post_id;
    #[Column]
    private string $post_title;
    #[Column]
private string $post_price;    
#[Column]
private string $post_town;
#[Column]
private string $post_address;

#[ManyToOne(targetEntity: User::class,inversedBy:'posts')]

private User $user_id;
#[ManyToOne(targetEntity: Category::class,inversedBy:'posts',cascade: ['persist'])]

private Category $category_id;
#[Column]
private string $post_images;
#[Column]
private string $post_description;

// This has to be set to the name of the mapping of on the inverse realtionship

#[Column(type:'datetime')]
    private \DateTime $post_date;


 public function getPostId(): int {return $this->post_id;}

	public function getPostTitle(): string {return $this->post_title;}

	public function getPostPrice(): string {return $this->post_price;}

	public function getPostTown(): string {return $this->post_town;}

	public function getPostAddress(): string {return $this->post_address;}

	public function getUserId(): User {return $this->user_id;}
	public function getCategoryId(): Category {return $this->category_id;}
	public function getPostImages(): string {return $this->post_images;}

	public function getPostDescription(): string {return $this->post_description;}

	public function getPostDate(): DateTime {return $this->post_date;}


	public function setPostTitle(string $post_title):Post {
		$this->post_title = $post_title;
		return $this;}

	public function setPostPrice(string $post_price): Post {
		$this->post_price = $post_price;
		return $this;}

	public function setPostTown(string $post_town): Post {
		$this->post_town = $post_town;return $this;}

	public function setPostAddress(string $post_address): Post {$this->post_address = $post_address;return $this;}

	public function setPostImages(string $post_images): Post {$this->post_images = $post_images;return $this;}

	public function setPostDescription(string $post_description): Post {$this->post_description = $post_description;return $this;}

	public function setPostDate(\DateTime $post_date): Post {$this->post_date = $post_date;return $this;}

	public function setUser(User $user){
		$user->addPost($this);
		$this->user_id = $user;
		
	}

	public function setCategory(Category $category){
		$category->addPost($this);
		$this->category_id = $category;
	}
}