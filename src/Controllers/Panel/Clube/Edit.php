<?php
namespace Luan\Clube\Controllers\Panel\Clube;
use Luan\Clube\Models\Clubes\Clubes;

use Luan\Clube\Helpers\Template\Loader;

class Edit
{
    protected Loader $template;

    protected Clubes $clubes;

    public function __construct() {
        $this->template = new Loader();
        $this->clubes = new Clubes();
    }

    public function execute($data)
    {   
        $clube = $this->clubes->findOne([
            'id' => $data['id']
        ]);
        $this->template->render('panel/clubeEdit', true, [
            'clube' => $clube
        ]);
    }

}