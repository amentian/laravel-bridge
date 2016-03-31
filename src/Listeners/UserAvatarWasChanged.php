<?php

namespace Amentian\Bridge\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Event\UserAvatarWasChanged as FlarumUserAvatarWasChanged;
use Amentian\Bridge\User;

class UserAvatarWasChanged
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(FlarumUserAvatarWasChanged::class, [$this, 'changeUserAvatarPath']);
    }

    /**
     * @param FlarumUserAvatarWasChanged $event
     */
    public function changeUserAvatarPath(FlarumUserAvatarWasChanged $event)
    {
        User::changeAvatar($event->user);
    }
}
