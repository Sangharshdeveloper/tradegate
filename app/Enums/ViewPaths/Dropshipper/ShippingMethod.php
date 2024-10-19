<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum ShippingMethod
{

    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.shipping-method.index',
        ROUTE =>'dropshipper.business-settings.shipping-method.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.shipping-method.update-view'
    ];
    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => 'dropshipper-views.shipping-method.update-view'
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
}
