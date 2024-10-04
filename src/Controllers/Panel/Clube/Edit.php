<?php
namespace Luan\Clube\Controllers\Panel\Clube;

use Luan\Clube\Helpers\Template\Loader;

class Edit
{
    protected Loader $template;
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        $this->template->render('panel/clubeEdit', true);
    }

}