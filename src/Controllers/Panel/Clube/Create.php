<?php
namespace Luan\Clube\Controllers\Panel\Clube;

use Luan\Clube\Helpers\Template\Loader;

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