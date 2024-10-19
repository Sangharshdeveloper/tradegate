<?php

namespace App\Enums\ViewPaths\Supplier;

enum ShippingMethod
{

    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.shipping-method.index',
        ROUTE =>'supplier.business-settings.shipping-method.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'supplier-views.shipping-method.update-view'
    ];
    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => 'supplier-views.shipping-method.update-view'
    ];
    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];
}
