<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum DeliveryMan
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.delivery-man.index'
    ];
    const LIST = [
        URI => 'list',
        VIEW => 'dropshipper-views.delivery-man.list',
        ROUTE => 'dropshipper.delivery-man.list'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.delivery-man.update-view'
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
        VIEW => 'dropshipper-views.delivery-man.rating'
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];

}
