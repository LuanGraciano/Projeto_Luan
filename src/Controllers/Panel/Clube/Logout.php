<?php
namespace Luan\Clube\Controllers\Panel\Clube;

use Luan\Clube\Helpers\Template\Loader;
use Luan\Clube\Models\Users\UserSession;

class Logout
{
    protected Loader $template;

    protected UserSession $userSession;

    public function __construct() {
        $this->template = new Loader();
        $this->userSession = new UserSession();
    }

    public function execute()
    {   
        $this->userSession->destroy();
        header("Location: /PROJETO_LUAN/login");
    }

}