<?php

// likable classes must implement CanBeLiked interface
interface CanBeLiked
{
  public function like();
  public function isLiked();
}

class Comment implements CanBeLiked
{
  public function like()
  {
    echo "Comment liked\n";
  }

  public function isLiked()
  {
    return false;
  }
}

class Post implements CanBeLiked
{
  public function like()
  {
    echo "Post liked\n";
  }

  public function isLiked()
  {
    return false;
  }
}

class Thread implements CanBeLiked
{
  public function like()
  {
    echo "Thread liked\n";
  }

  public function isLiked()
  {
    return false;
  }
}

class PerformLikeAction
{
  // polymorphic method to handle liking any CanBeLiked model
  public function handle(CanBeLiked $model)
  {
    if ($model->isLiked()) {
      return;
    }

    $model->like();
  }
}

$perform_like_action = new PerformLikeAction();
$perform_like_action->handle(new Comment());
$perform_like_action->handle(new Post());
$perform_like_action->handle(new Thread());
