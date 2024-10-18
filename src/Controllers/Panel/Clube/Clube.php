<?php
namespace Luan\Clube\Controllers\Panel\Clube;

use Luan\Clube\Helpers\Template\Loader;
use Luan\Clube\Models\Clubes\Clubes;

class Clube
{
    protected Loader $template;

    protected Clubes $clubes;
    public function __construct() {
        $this->template = new Loader();
        $this->clubes = new Clubes();
    }

    public function execute()
    {   
        
        $clubes = $this->clubes->findAll();
        $this->template->render('/panel/clube', true, [
            "clubes" => $clubes
        ]);
    }

}