<?php

namespace App\Enums\ViewPaths\Student;

enum Shop
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.shop.index',
        ROUTE => 'student.shop.index',
    ];
    const ORDER_SETTINGS = [
        URI => 'update-order-settings',
        VIEW => 'student-views.shop.order-settings-view'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'student-views.shop.update-view'
    ];
    const VACATION = [
        URI => 'add-vacation',
        VIEW => ''
    ];
    const TEMPORARY_CLOSE = [
        URI => 'close-shop-temporary',
        VIEW => ''
    ];
}
