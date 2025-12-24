<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;
use function count;

class LoginForm
{
    protected $attributes = [];
    protected $errors = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;

        if (!Validator::email($this->attributes['email'] ?? '')) {
            $this->errors['email'] = 'Invalid email address';
        }

        if (!Validator::string($this->attributes['password'] ?? '', 8, 255)) {
            $this->errors['password'] = 'Invalid password';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        if ($instance->failed()) {
            $instance->throw();
        }

        return $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors, $this->attributes);
    }

    public function failed()
    {
        return count($this->errors) > 0;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }

    public function errors()
    {
        return $this->errors;
    }
}
