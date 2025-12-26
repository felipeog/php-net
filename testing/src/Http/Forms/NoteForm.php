<?php

namespace Http\Forms;

use Core\Validator;

class NoteForm extends Form
{
    protected function validate()
    {
        if (!Validator::string($this->value('body'), 1, 1000)) {
            $this->errors['body'] = 'Body length must be between 1 and 1000';
        }
    }
}
