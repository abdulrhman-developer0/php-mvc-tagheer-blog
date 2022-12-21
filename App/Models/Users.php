<?php

namespace App\Models;
use Core;

class Users extends Core\Model
{
    const TABLE = 'users';

    public function tryLogin(string $email,string $password)
    {
        return $this->select('*',self::TABLE,'where user_email="'.$email.'" and user_password="'.$password.'"');
    }

}