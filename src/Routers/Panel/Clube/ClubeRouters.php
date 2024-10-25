<?php

namespace Luan\Clube\Routers\Panel\Clube;

use CoffeeCode\Router\Router;
use Luan\Clube\Models\Users\UserSession;

class ClubeRouters
{
    private Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function execute()
    {

        $this->router->namespace('Luan\Clube\Controllers\Panel\Clube');
                                                                                           
        $this->router->get("/panel/clube/", 'Clube:execute', middleware: UserSession::class);

        $this->router->get("/panel/clube/create", 'Create:execute', middleware: UserSession::class);

        $this->router->post("/panel/clube/create/save", 'CreatePost:execute', middleware: UserSession::class);

        $this->router->get("/panel/clube/edit/{id}", 'Edit:execute', middleware: UserSession::class);

        $this->router->post("/panel/clube/delete/{id}", 'Delete:execute', middleware: UserSession::class);

        $this->router->get("/panel/clube/logout", 'Logout:execute', middleware: UserSession::class);
    }

}