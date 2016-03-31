<?php

namespace Amentian\Bridge\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Event\UserWasRegistered as FlarumUserWasRegistered;

class UserWasRegistered
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(FlarumUserWasRegistered::class, [$this, 'registerNewUser']);
    }

    /**
     * @param ConfigureFormatter $event
     */
    public function registerNewUser(ConfigureFormatter $event)
    {
        $event->configurator->Litedown;
    }
}
