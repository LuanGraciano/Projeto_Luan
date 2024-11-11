<?php
namespace Luan\Clube\Routers\LadingPage;
use CoffeeCode\Router\Router;
class LadingPageRouters 
{
    private Router $router;
    public function __construct(Router $router) 
    {
        $this->router = $router;
    }
    public function execute()
    {
        $this->router->namespace('Luan\Clube\Controllers\LandingPage');
            
        $this->router->get("/", 'LandingPage:execute');
    }
}