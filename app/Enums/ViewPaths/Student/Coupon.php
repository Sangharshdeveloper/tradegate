<?php

namespace App\Enums\ViewPaths\Student;

enum Coupon
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.coupon.index',
        ROUTE => 'student.coupon.index'
    ];
    const ADD = [
        URI => 'add',
        VIEW => ''
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'student-views.coupon.update-view'
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
    const QUICK_VIEW = [
        URI => 'quick-view',
        VIEW => 'student-views.coupon.quick-view'
    ];
    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => ''
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];


}
