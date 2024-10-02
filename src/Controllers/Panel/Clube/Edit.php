<?php
namespace Luan\Clube\Controllers\Panel\Clube;

use Luan\Clube\Helpers\Template\Loader;

class Edit
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "tela de editação";
    }

}