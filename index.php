<?php

require_once './vendor/autoload.php';

use luan\clube\Routers\Loader;
//use luan\clube\Models\Users\Users;

//$user = new Users();

//$data = [
//    'phone' => "35988034918",
 //   'email' => "luan@faex.com",
 //   'name' => "Luan",
//    'password' => password_hash('123456', PASSWORD_DEFAULT),

//];

//$user->create($data);

$loader = new Loader();
$loader->execute();



?>