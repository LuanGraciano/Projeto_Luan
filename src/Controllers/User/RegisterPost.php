<?php

namespace luan\clube\Controllers\User;

use luan\clube\Models\Users\Users;
use luan\clube\Controllers\User\Services\Register\Validate;
use luan\clube\Helpers\Message\Message;

class RegisterPost
{
    protected Users $users;

    protected Validate $validate;

    protected Message $message;

    public function __construct()
    {
        $this->users = new Users();
        $this->validate = new Validate();
        $this->message = new Message();
    }
    public function execute($data)
    {
        if ($this->validate->execute($data)){
            header('location: /register');
            return;
        }
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);

        $this->message->setMessageSuccess("Registro realizado com sucesso");
        $this->message->setMessageError("Não foi possiivel fazer o registro");

        header('location:/PROJETO_LUAN/login');

        return;
    }
}