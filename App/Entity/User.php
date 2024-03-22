<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('users')]
class User{
    #[Id]
    #[Column(name: 'user_id'), GeneratedValue]
    private int $user_id;
    #[Column]
private string $user_fname;
#[Column]

private string $user_lname;
#[Column]
private string $user_email;
#[Column]
private string $user_phone;
#[Column]
private string $user_pass;
#[Column]
private string $user_photo;

#[OneToMany(targetEntity: Post::class, mappedBy: 'user_id')]
private Collection $posts;

public function __construct(){
    $this->posts = new ArrayCollection();
}


public function getUserId(): int {return $this->user_id;}

	public function getUserFname(): string {return $this->user_fname;}

	public function getUserLname(): string {return $this->user_lname;}

	public function getUserEmail(): string {return $this->user_email;}

	public function getUserPhone(): string {return $this->user_phone;}

	public function getUserPass(): string {return $this->user_pass;}

	public function getUserPhoto(): string {return $this->user_photo;}

	public function setUserId(int $user_id): void {$this->user_id = $user_id;}

	public function setUserFname(string $user_fname): User {$this->user_fname = $user_fname;return $this;}

	public function setUserLname(string $user_lname): User {$this->user_lname = $user_lname;return $this;}

	public function setUserEmail(string $user_email): User {$this->user_email = $user_email;return $this;}

	public function setUserPhone(string $user_phone): User {$this->user_phone = $user_phone;return $this;}

	public function setUserPass(string $user_pass): User
	{
		$this->user_pass = $user_pass;
		return $this;
	}
	public function setUserPhoto(string $user_photo): User {$this->user_photo = $user_photo;return $this;}

	public function addPost(Post $post){
		$this->posts[] = $post;
	}
	
}