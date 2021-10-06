<?php

namespace app\models;

use app\core\Model;

class contactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED]
        ];
    }

    public function send()
    {
        return true;
    }

}