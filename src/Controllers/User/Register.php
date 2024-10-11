<?php
namespace Luan\Clube\Controllers\User;

use Luan\Clube\Helpers\Template\Loader;

class Register
{
    private Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render("user/register", false);
    }
}