<?php

namespace App\Enums\ViewPaths\Supplier;

enum Chatting
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.chatting.index',
    ];
    const MESSAGE = [
        URI => 'message',
        VIEW => 'supplier-views.chatting.index',
    ];

    const NEW_NOTIFICATION = [
        URI => 'new-notification',
        VIEW => '',
    ];
}
