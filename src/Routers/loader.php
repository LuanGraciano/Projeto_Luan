<?php

namespace Luan\Clube\Routers;

use CoffeeCode\Router\Router;
use Luan\Clube\Routers\Panel\Clube\ClubeRouters;
use Luan\Clube\Routers\User\UserRouters;
use Luan\Clube\Routers\LadingPage\LadingPageRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private ClubeRouters $clubeRouters;

    private LadingPageRouters $ladingPageRouters;

    public function __construct() {
        $this->router = new Router ("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->clubeRouters = new ClubeRouters($this->router);
        $this->ladingPageRouters = new LadingPageRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        
        $this->clubeRouters->execute();

        $this->ladingPageRouters->execute();
        
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
