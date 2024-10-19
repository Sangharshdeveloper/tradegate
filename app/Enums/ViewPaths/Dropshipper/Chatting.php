<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Chatting
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.chatting.index',
    ];
    const MESSAGE = [
        URI => 'message',
        VIEW => 'dropshipper-views.chatting.index',
    ];

    const NEW_NOTIFICATION = [
        URI => 'new-notification',
        VIEW => '',
    ];
}
