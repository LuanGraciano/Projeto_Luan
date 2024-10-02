<?php

require_once './vendor/autoload.php';

session_start();

use Luan\Clube\Routers\Loader;
// use Luan\Clube\Models\Users\Users;

// $user = new Users();

// $data = $user->findAll();

// var_dump($data);

$loader = new Loader();
$loader->execute();



?>