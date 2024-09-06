<?php

namespace luan\clube\Controllers\User;

use luan\clube\Models\Users\Users;
use luan\clube\Controllers\User\Services\Register\Validate;

class RegisterPost
{
    protected Users $users;

    protected Validate $validate;
    public function __construct()
    {
        $this->users = new Users();
    }
    public function execute($data)
    {
        if ($this->validate->execute($data)){
            header('location: /register');
            return;
        }
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);

        header('location: /register');

        return;
    }
}