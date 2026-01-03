<?php

class Subscription
{
  // subscription depends on a billing portal
  public function __construct(protected BillingPortal $billing_portal) {}

  public function create()
  {
    // subscription isn't concerned with billing portal details
    $customer = $this->billing_portal->getCustomer();
  }

  public function cancel() {}

  public function swap(string $plan) {}

  public function invoice() {}
}

// billing portal abstraction
interface BillingPortal
{
  public function getCustomer();
  public function getSubscription();
}

// concrete implementations of the billing portal
class StripeBillingPortal implements BillingPortal
{
  public function getCustomer() {}

  public function getSubscription() {}
}

// another concrete implementation of the billing portal
class BraintreeBillingPortal implements BillingPortal
{
  public function getCustomer() {}

  public function getSubscription() {}
}

$subscription = new Subscription(new StripeBillingPortal());
