<?php

namespace App\Providers;

use App\Events\UserLoggedIn;
use App\Events\UserLoggedOut;
use App\Events\UserRegistered;
use App\Listeners\HandleUserLoggedIn;
use App\Listeners\HandleUserLoggedOut;
use App\Listeners\HandleUserRegistered;
use Illuminate\Auth\Events\Login as FrameworkLogin;
use Illuminate\Auth\Events\Logout as FrameworkLogout;
use Illuminate\Auth\Events\Registered as FrameworkRegistered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
  protected $listen = [
    // If your app already fires framework events, we'll bridge them to our custom events in the boot() method.
    // Keeping this empty so we don't clash with existing listeners. You can also attach directly:
    FrameworkRegistered::class => [],
    FrameworkLogin::class => [],
    FrameworkLogout::class => [],
  ];

  public function boot(): void
  {
    parent::boot();

    // Bridge framework events to our app events
    // Event::listen(FrameworkRegistered::class, function ($event) {
    //   event(new UserRegistered($event->user));
    // });

    // Event::listen(FrameworkLogin::class, function ($event) {
    //   // $event->user is the authenticated user
    //   event(new UserLoggedIn($event->user));
    // });

    // Event::listen(FrameworkLogout::class, function ($event) {
    //   event(new UserLoggedOut($event->user));
    // });

    // // Attach our listeners
    // Event::listen(UserRegistered::class, [HandleUserRegistered::class, 'handle']);
    // Event::listen(UserLoggedIn::class, [HandleUserLoggedIn::class, 'handle']);
    // Event::listen(UserLoggedOut::class, [HandleUserLoggedOut::class, 'handle']);
  }
}