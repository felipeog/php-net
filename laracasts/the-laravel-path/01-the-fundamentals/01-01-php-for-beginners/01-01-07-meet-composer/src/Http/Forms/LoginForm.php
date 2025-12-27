<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm extends Form
{
    protected function validate()
    {
        if (!Validator::email($this->value('email'))) {
            $this->errors['email'] = 'Invalid email address';
        }

        if (!Validator::string($this->value('password'), 8, 255)) {
            $this->errors['password'] = 'Invalid password';
        }
    }
}
