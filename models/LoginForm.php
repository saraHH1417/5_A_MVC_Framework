<?php

namespace app\models;

use sarahh1417\phpmvc\Application;
use sarahh1417\phpmvc\Model;

class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED , self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function login()
    {
        $user = User::findOne(["email" => $this->email]);
        if(!$user) {
            $this->addError('email' , 'User does not exists with this Email.' );
            return false;
        }
        if(!password_verify($this->password, $user->password)) {
            $this->addError('password' , 'Password is incorrect.' );
            return false;
        }

        return Application::$app->login($user);
    }
}