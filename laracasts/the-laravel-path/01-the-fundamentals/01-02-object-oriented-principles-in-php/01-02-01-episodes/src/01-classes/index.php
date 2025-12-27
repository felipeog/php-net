<?php

// blueprint: Person
class Person
{
}

// implementation: $person
$person = new Person();

// noun: Post
class Post
{
    // verb: archive
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
