<?php

namespace App\Enums\ViewPaths\Supplier;

enum POSOrder
{
    const ORDER_DETAILS = [
        URI => 'order-details',
        VIEW => 'supplier-views.pos.order.order-details',
    ];
    const ORDER_PLACE = [
      VIEW => 'supplier-views.pos.order.order-details',
      URI => 'order-place'

    ];
    const CANCEL_ORDER =[
        VIEW => 'supplier-views.pos.partials._view-hold-orders',
        URI => 'cancel-order',
    ];
    const HOLD_ORDERS =[
        VIEW => 'supplier-views.pos.partials._view-hold-orders',
        URI => 'view-hold-orders',

    ];
}
