<?php

use App\App;

$email=$_POST['email'];
$password=$_POST['password'];
echo $password;
$db= App::db();
$sql = 'select user_email,user_pass from users where (email = ? AND password = ?)';
$stmt = $db->prepare($sql);

$stmt->execute([$email, $password]);

if (count($stmt->fetch())>0){
    echo 'correct email and password';
}
header('Location: /Advertise2.php');
