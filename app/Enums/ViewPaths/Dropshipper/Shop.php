<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Shop
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.shop.index',
        ROUTE => 'dropshipper.shop.index',
    ];
    const ORDER_SETTINGS = [
        URI => 'update-order-settings',
        VIEW => 'dropshipper-views.shop.order-settings-view'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.shop.update-view'
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
