<?php

namespace App\Enums\ViewPaths\Supplier;

enum Coupon
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.coupon.index',
        ROUTE => 'supplier.coupon.index'
    ];
    const ADD = [
        URI => 'add',
        VIEW => ''
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'supplier-views.coupon.update-view'
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
    const QUICK_VIEW = [
        URI => 'quick-view',
        VIEW => 'supplier-views.coupon.quick-view'
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
