<?php

namespace luan\clube\Routers;

use CoffeeCode\Router\Router;
use luan\clube\Routers\Panel\Scheduler\SchedulerRouters;
use luan\clube\Routers\User\UserRouters;

class loader
{
    private Router $router;

    private UserRouters $userRouter;

    private SchedulerRouters $schedulerRouters;

    public function __construct() {
        $this->router = new Router ("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->schedulerRouters = new SchedulerRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->router->dispatch();
        $this->schedulerRouters->execute();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
