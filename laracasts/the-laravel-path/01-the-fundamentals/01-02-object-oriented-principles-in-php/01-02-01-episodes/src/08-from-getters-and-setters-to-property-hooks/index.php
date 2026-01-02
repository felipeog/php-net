<?php

class User
{
  // asymmetric visibility
  // public get, private set
  private(set) string $name;

  // property hooks
  public string $email {
    get {
      return str_replace('@', '(at)', $this->email);
    }

    set {
      if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("Invalid email");
      }

      $this->email = $value;
    }
  }

  public function __construct(string $name, string $email)
  {
    $this->name = $name;
    $this->email = $email;
  }
}

$user = new User('Felipe Gonça', 'felipe@gonca.com');
var_dump($user);

echo $user->email . "\n";
$user->email = 'gonca@felipe.com';
echo $user->email . "\n";

echo $user->name . "\n";
$user->name = 'Gonça Felipe'; // error, cannot access private property
