<?php

namespace Http\Forms;

use Core\Validator;

class RegisterForm extends Form
{
    protected function validate()
    {
        if (!Validator::email($this->value('email'))) {
            $this->errors['email'] = 'Invalid email address';
        }

        if (!Validator::string($this->value('password'), 8, 255)) {
            $this->errors['password'] = 'Password length must be between 8 and 255';
        }
    }
}
