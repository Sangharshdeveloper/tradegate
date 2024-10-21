<?php

namespace App\Enums\ViewPaths\Student;

enum DeliveryManWallet
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.delivery-man.wallet.index',
        ROUTE => 'student.delivery-man.withdraw.index',
    ];
    const ORDER_HISTORY = [
        URI => 'order-history',
        VIEW => 'student-views.delivery-man.wallet.order-history'
    ];
    const ORDER_STATUS_HISTORY = [
        URI => 'order-history-status',
        VIEW => 'student-views.delivery-man.wallet._order-status-history'
    ];
    const EARNING = [
        URI => 'earning',
        VIEW => 'student-views.delivery-man.wallet.earning'
    ];
    const CASH_COLLECT = [
        URI => 'cash-collect',
        VIEW => 'student-views.delivery-man.wallet.cash-collect'
    ];
}
