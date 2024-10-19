<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum POSOrder
{
    const ORDER_DETAILS = [
        URI => 'order-details',
        VIEW => 'dropshipper-views.pos.order.order-details',
    ];
    const ORDER_PLACE = [
      VIEW => 'dropshipper-views.pos.order.order-details',
      URI => 'order-place'

    ];
    const CANCEL_ORDER =[
        VIEW => 'dropshipper-views.pos.partials._view-hold-orders',
        URI => 'cancel-order',
    ];
    const HOLD_ORDERS =[
        VIEW => 'dropshipper-views.pos.partials._view-hold-orders',
        URI => 'view-hold-orders',

    ];
}
