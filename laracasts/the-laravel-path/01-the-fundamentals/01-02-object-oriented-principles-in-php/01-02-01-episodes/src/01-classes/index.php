<?php

// blueprint: Person class
class Person
{
}

// implementation: $person object
$person = new Person();

// noun: Post
class Post
{
    // method: behavior
    public function archive()
    {
        echo "Archived\n";
    }

    // verb: share
    public function share()
    {
        echo "Shared\n";
    }
}

$post = new Post();

$post->archive();
$post->share();
