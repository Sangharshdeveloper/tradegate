<?php

namespace App\Enums\ViewPaths\Student;

enum DeliveryMan
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.delivery-man.index'
    ];
    const LIST = [
        URI => 'list',
        VIEW => 'student-views.delivery-man.list',
        ROUTE => 'student.delivery-man.list'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'student-views.delivery-man.update-view'
    ];
    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => ''
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
    const RATING = [
        URI => 'rating',
        VIEW => 'student-views.delivery-man.rating'
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];

}
