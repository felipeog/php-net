<?php

class Person
{
  public function __construct(protected string $name) {}

  // name is accessible, but not directly
  // prevents direct modification from outside
  public function getName()
  {
    return $this->name;
  }

  // accessible from anywhere
  // many people can know about a person’s job
  public function job()
  {
    echo "{$this->name}'s job\n";
  }

  // accessible from this class and subclasses
  // fewer people can know about a person’s money
  protected function money()
  {
    echo "{$this->name}'s money\n";
  }

  // accessible only from this class
  // only the person themselves can know their secrets
  private function secrets()
  {
    echo "{$this->name}'s secrets\n";
  }
}

$bob = new Person('Bob');

// works
echo $bob->getName() . "\n";
$bob->job();

// fatal error
$bob->money();
$bob->secrets();
