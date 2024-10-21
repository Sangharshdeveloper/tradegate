<?php

namespace App\Enums\ViewPaths\Student;

enum Chatting
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.chatting.index',
    ];
    const MESSAGE = [
        URI => 'message',
        VIEW => 'student-views.chatting.index',
    ];

    const NEW_NOTIFICATION = [
        URI => 'new-notification',
        VIEW => '',
    ];
}
