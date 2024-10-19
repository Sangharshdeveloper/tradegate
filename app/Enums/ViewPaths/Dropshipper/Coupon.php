<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Coupon
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.coupon.index',
        ROUTE => 'dropshipper.coupon.index'
    ];
    const ADD = [
        URI => 'add',
        VIEW => ''
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.coupon.update-view'
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
    const QUICK_VIEW = [
        URI => 'quick-view',
        VIEW => 'dropshipper-views.coupon.quick-view'
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
