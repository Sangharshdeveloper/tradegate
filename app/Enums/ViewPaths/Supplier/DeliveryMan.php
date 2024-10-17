<?php

namespace App\Enums\ViewPaths\Supplier;

enum DeliveryMan
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.delivery-man.index'
    ];
    const LIST = [
        URI => 'list',
        VIEW => 'supplier-views.delivery-man.list',
        ROUTE => 'vendor.delivery-man.list'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'supplier-views.delivery-man.update-view'
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
        VIEW => 'supplier-views.delivery-man.rating'
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];

}
