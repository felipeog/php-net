<?php

// =============================================================================
// mocks - different newsletter APIs
// =============================================================================

class CampaignMonitorAPI
{
  public string $api_key;

  public function setApiKey(string $api_key)
  {
    $this->api_key = $api_key;
  }

  public function subscribe(string $list, string $email)
  {
    echo "Adding \"{$email}\" to Campaign Monitor list \"{$list}\"\n";
  }
}

class PostMarkAPI
{
  public function __construct(public string $api_key) {}

  public function addEmailToList(string $list, string $email)
  {
    echo "Adding \"{$email}\" to PostMark list \"{$list}\"\n";
  }
}

// =============================================================================
// interfaces - abstractions
// =============================================================================

interface NewsletterProvider
{
  public function addToList(string $list, string $email): void;
}

// =============================================================================
// providers - implementations
// =============================================================================

class CampaignMonitorProvider implements NewsletterProvider
{
  public function addToList(string $list, string $email): void
  {
    $provider = new CampaignMonitorAPI();
    $provider->setApiKey('campaign_monitor_api_key');
    $provider->subscribe($list, $email);
  }
}

class PostMarkProvider implements NewsletterProvider
{
  public function addToList(string $list, string $email): void
  {
    $provider = new PostMarkAPI('postmark_api_key');
    $provider->addEmailToList($list, $email);
  }
}

// =============================================================================
// classes
// =============================================================================

class User
{
  public array $properties = [];

  public function __construct(string $email)
  {
    $this->properties['email'] = $email;
  }

  public function update(array $properties)
  {
    echo "Old user: " . json_encode($this->properties) . "\n";

    $this->properties = array_merge($this->properties, $properties);

    echo "New user: " . json_encode($this->properties) . "\n";
  }
}

// method dependency injection
class NewsletterMethodInjection
{
  // coupled to User and NewsletterProvider
  public function subscribe(User $user, NewsletterProvider $provider)
  {
    $provider->addToList('default', $user->properties['email']);
    $user->update(['subscribed' => true]);

    return true;
  }
}

$newsletter_method_injection = new NewsletterMethodInjection();
$newsletter_method_injection->subscribe(new User('method@injection.com'), new PostMarkProvider());

// constructor dependency injection
class NewsletterConstructorInjection
{
  // coupled to NewsletterProvider
  public function __construct(public NewsletterProvider $provider) {}

  public function subscribe(User $user)
  {
    $this->provider->addToList('default', $user->properties['email']);
    $user->update(['subscribed' => true]);

    return true;
  }
}

$newsletter_constructor_injection = new NewsletterConstructorInjection(new CampaignMonitorProvider());
$newsletter_constructor_injection->subscribe(new User('constructor@injection.com'));
