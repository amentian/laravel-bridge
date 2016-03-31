<?php

namespace Amentian\Bridge\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Event\UserPasswordWasChanged as FlarumUserPasswordWasChanged;
use Amentian\Bridge\User;

class UserPasswordWasChanged
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(FlarumUserPasswordWasChanged::class, [$this, 'changeUserPassword']);
    }

    /**
     * @param FlarumUserPasswordWasChanged $event
     */
    public function changeUserPassword(FlarumUserPasswordWasChanged $event)
    {
        User::changePassword($event->user);
    }
}
