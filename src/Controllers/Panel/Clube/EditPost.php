<?php
namespace Luan\Clube\Controllers\Panel\Clube;
use Luan\Clube\Models\Clubes\Clubes;
use Luan\Clube\Helpers\Message\Message;
class EditPost
{
    protected Clubes $clubes;
    protected Message $message;
    public function __construct()
    {
        $this->clubes = new Clubes();
        $this->message = new Message();
    }
    public function execute($data)
    {
        $id = $data['id'];
        unset($data['id']);
        $this->clubes->update($data, $id);

        $this->message->setMessageSuccess('Agendamento atualizado com sucesso');
        header('location: /PROJETO_LUAN/panel/clube/');
    }
}