<?php
namespace luan\clube\Controllers\User;

use luan\clube\Helpers\Template\Loader;

class login
{
    private Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {
$this->template->render("user/login", false);
    }
}