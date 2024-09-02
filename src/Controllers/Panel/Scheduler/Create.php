<?php
namespace luan\clube\Scheduler\Controllers\Panel\Scheduler;

use luan\clube\Scheduler\Helpers\Template\Loader;

class Create
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "tela de criação";
    }

}