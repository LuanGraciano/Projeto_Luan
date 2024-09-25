<?php

require_once './vendor/autoload.php';

session_start();


use luan\clube\Routers\Loader;
use luan\clube\Models\Users\Users;

$user = new Users();

$condition = [
    "email" => "luan@bol.com"
    
    

];

$data = $user->findOne($condition, "name, email");

$loader = new Loader();
$loader->execute();



?>