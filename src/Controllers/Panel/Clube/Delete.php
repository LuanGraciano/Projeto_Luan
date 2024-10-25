<?php
namespace Luan\Clube\Controllers\Panel\Clube;

use Luan\Clube\Helpers\Template\Loader;
use Luan\Clube\Models\Clubes\Clubes;
use Luan\Clube\Helpers\Message\Message;
class Delete
{
    protected Loader $template;
    protected Clubes $clubes;
    protected Message $message;
    public function __construct() {
        $this->template = new Loader();
        $this->clubes = new Clubes();
        $this->message = new Message();
    }
    public function execute($data)
    {   
        if($this->clubes->delete($data['id'])) {
            $this->message->setMessageSuccess('Deleted successfully');
            header('Location: /PROJETO_LUAN/panel/clube/');
            return;
        }
        $this->message->setMessageSuccess('Não foi possivel deletar');
        header('Location: /PROJETO_LUAN/panel/clube/');
    }
}