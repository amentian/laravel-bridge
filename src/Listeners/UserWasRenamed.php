<?php

namespace Amentian\Bridge\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Event\UserWasRenamed as FlarumUserWasRenamed;
use Amentian\Bridge\User;


class UserWasRenamed
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(FlarumUserWasRenamed::class, [$this, 'changeUsername']);
    }

    /**
     * @param FlarumUserWasRenamed $event
     */
    public function changeUsername(FlarumUserWasRenamed $event)
    {
        User::changeUsername($event->user);
    }
}
