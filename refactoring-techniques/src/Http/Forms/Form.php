<?php

namespace Http\Forms;

use Core\ValidationException;
use function count;

abstract class Form
{
    protected $attributes = [];
    protected $errors = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;

        $this->validate();
    }

    abstract protected function validate();

    protected function value($key, $default = '')
    {
        return $this->attributes[$key] ?? $default;
    }

    public static function validateForm($attributes)
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
