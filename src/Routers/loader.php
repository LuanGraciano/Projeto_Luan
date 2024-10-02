<?php

namespace Luan\Clube\Routers;

use CoffeeCode\Router\Router;
use Luan\Clube\Routers\Panel\Clube\ClubeRouters;
use Luan\Clube\Routers\User\UserRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private ClubeRouters $clubeRouters;

    public function __construct() {
        $this->router = new Router ("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->clubeRouters = new ClubeRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->router->dispatch();
        $this->clubeRouters->execute();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
