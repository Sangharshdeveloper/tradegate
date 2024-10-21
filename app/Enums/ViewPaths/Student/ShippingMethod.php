<?php

namespace App\Enums\ViewPaths\Student;

enum ShippingMethod
{

    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.shipping-method.index',
        ROUTE =>'student.business-settings.shipping-method.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'student-views.shipping-method.update-view'
    ];
    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => 'student-views.shipping-method.update-view'
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
}
