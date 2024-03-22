<?php declare(strict_types=1);

namespace App\Model;
use App\Entity\User as em;
use App\Model;
class User extends Model{

    public function create($email , $fname, $lname, $address, $password){

        $sql = 'insert into users()values(?,?,?,?,?)';

        $stmt = $this->db->prepare($sql);

        return $this->db->lastInsertId();

    }
}