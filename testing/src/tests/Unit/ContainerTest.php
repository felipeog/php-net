<?php

use Core\Container;

it('resolves', function () {
    $container = new Container();
    $container->bind('foo', fn() => 'bar');

    $value = $container->resolve('foo');
    $expected = 'bar';

    expect($value)->toEqual($expected);
});
