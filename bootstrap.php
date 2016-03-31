<?php

use Omr\Bridge\Listeners;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events)
{
    //$events->subscribe(Listeners\UserWasRegistered::class);
    $events->subscribe(Listeners\UserAvatarWasChanged::class);
    $events->subscribe(Listeners\UserEmailWasChanged::class);
    $events->subscribe(Listeners\UserPasswordWasChanged::class);
    $events->subscribe(Listeners\UserWasRenamed::class);
};
