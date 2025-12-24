<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Invalid email address';
        }

        if (!Validator::string($password, 8, 255)) {
            $this->errors['password'] = 'Invalid password';
        }

        return empty($this->errors);
    }

    public function error($field, $message)
    {
        return $this->errors[$field] = $message;
    }

    public function errors()
    {
        return $this->errors;
    }
}
