<?php
namespace Luan\Clube\Controllers\LandingPage;
use Luan\Clube\Helpers\Template\Loader;
class LandingPage
{
    private Loader $template;
    public function __construct() {
        $this->template = new Loader();
    }
    public function execute()
    {
        $this->template->render("ladingPage/ladingPage", false);
    }
}