<?php

// =============================================================================
// Vehicle
// =============================================================================

class Vehicle
{
  public function accelerate()
  {
    echo "Accelerating\n";
  }
}

class Car extends Vehicle
{
  // inherites `accelerate` method from `Vehicle`
}

$car = new Car();
$car->accelerate();

class Cart extends Vehicle
{
  // overrides `accelerate` method from `Vehicle`
  public function accelerate()
  {
    echo "Rolling\n";
  }
}

$cart = new Cart();
$cart->accelerate();

// =============================================================================
// Notification
// =============================================================================

class Notification
{
  public function __construct(public string $message) {}

  public function send()
  {
    // handle default logic here
    echo "{$this->message}\n";
  }
}

$notification = new Notification('Notification message');
$notification->send();

class EmailNotification extends Notification
{
  public function send()
  {
    // handle email logic here
    echo "{$this->message}\n";
  }
}

$email_notification = new EmailNotification('EmailNotification message');
$email_notification->send();

class PushNotification extends Notification
{
  public function send()
  {
    // handle push logic here
    echo "{$this->message}\n";
  }
}

$push_notification = new PushNotification('PushNotification message');
$push_notification->send();

// =============================================================================
// Achievement
// =============================================================================

class User
{
  public function __construct(
    public int $posts,
    public int $comments
  ) {}
}

// abstract class cannot be instantiated directly
abstract class Achievement
{
  public function __construct(
    public string $name,
    public string $description,
    public string $icon,
  ) {}

  // abstract method must be implemented by subclasses
  abstract public function qualifier(User $user): bool;
}

class FirstPostAchievement extends Achievement
{
  public function qualifier(User $user): bool
  {
    echo $user->posts > 0 ?  "Has first post" :  "No post";
    echo "\n";

    return $user->posts > 0;
  }
}

class TalkativeAchievement extends Achievement
{
  public function qualifier(User $user): bool
  {
    echo $user->comments > 100 ?  "Talkative" :  "Not talkative";
    echo "\n";

    return $user->comments > 100;
  }
}

$first_post = new FirstPostAchievement(
  'First Post',
  'Created your first post',
  'first-post.png',
);
$talkative = new TalkativeAchievement(
  'Talkative',
  'Created more than 100 comments',
  'talkative.png',
);

$user = new User(4, 7);
$first_post->qualifier($user);
$talkative->qualifier($user);
