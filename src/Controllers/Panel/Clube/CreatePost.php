<?php
namespace Luan\Clube\Controllers\Panel\Clube;
use Luan\Clube\Models\Clubes\Clubes;
use Luan\Clube\Helpers\Message\Message;
class CreatePost
{
    protected Clubes $clubes;
    protected Message $message;
    public function __construct() {
        $this->clubes = new Clubes();
        $this->message = new Message();
    }
    public function execute($data)
    {  
        //deve conter alem da criação a validação dos dados     
        $this->clubes->create($data);
        $this->message->setMessageSuccess('Agendamento criado com sucesso');
        header('location: /PROJETO_LUAN/panel/clube/');
    }
}