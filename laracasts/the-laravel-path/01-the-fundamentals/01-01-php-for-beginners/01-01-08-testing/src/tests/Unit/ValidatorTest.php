<?php

use Core\Validator;

describe('string', function () {
    it('validates a valid string', function () {
        $value = Validator::string('some string');
        $expected = true;

        expect($value)->toEqual($expected);
    });

    it('validates an invalid string', function () {
        $value = Validator::string(false);
        $expected = false;

        expect($value)->toEqual($expected);
    });

    it('validates minimum length', function () {
        $value = Validator::string('some string', 5);
        $expected = true;

        expect($value)->toEqual($expected);
    });

    it('validates maximum length', function () {
        $value = Validator::string('some string', null, 20);
        $expected = true;

        expect($value)->toEqual($expected);
    });
});

describe('email', function () {
    it('validates a valid email', function () {
        $value = Validator::email('some@email.com');
        $expected = true;

        expect($value)->toEqual($expected);
    });

    it('validates an invalid email', function () {
        $value = Validator::email('some#email$com');
        $expected = false;

        expect($value)->toEqual($expected);
    });
});
