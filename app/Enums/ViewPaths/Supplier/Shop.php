<?php

namespace App\Enums\ViewPaths\Supplier;

enum Shop
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.shop.index',
        ROUTE => 'vendor.shop.index',
    ];
    const ORDER_SETTINGS = [
        URI => 'update-order-settings',
        VIEW => 'supplier-views.shop.order-settings-view'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'supplier-views.shop.update-view'
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
