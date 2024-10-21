<?php

namespace App\Enums\ViewPaths\Student;

enum POSOrder
{
    const ORDER_DETAILS = [
        URI => 'order-details',
        VIEW => 'student-views.pos.order.order-details',
    ];
    const ORDER_PLACE = [
      VIEW => 'student-views.pos.order.order-details',
      URI => 'order-place'

    ];
    const CANCEL_ORDER =[
        VIEW => 'student-views.pos.partials._view-hold-orders',
        URI => 'cancel-order',
    ];
    const HOLD_ORDERS =[
        VIEW => 'student-views.pos.partials._view-hold-orders',
        URI => 'view-hold-orders',

    ];
}
