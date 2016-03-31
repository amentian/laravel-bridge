<?php

namespace Amentian\Bridge\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Event\UserEmailWasChanged as FlarumUserEmailWasChanged;
use Amentian\Bridge\User;

class UserEmailWasChanged
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(FlarumUserEmailWasChanged::class, [$this, 'changeUserEmail']);
    }

    /**
     * @param FlarumUserEmailWasChanged $event
     */
    public function changeUserEmail(FlarumUserEmailWasChanged $event)
    {
        User::changeEmail($event->user);
    }
}
