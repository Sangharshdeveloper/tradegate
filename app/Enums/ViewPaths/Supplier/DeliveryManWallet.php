<?php

namespace App\Enums\ViewPaths\Supplier;

enum DeliveryManWallet
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.delivery-man.wallet.index',
        ROUTE => 'vendor.delivery-man.withdraw.index',
    ];
    const ORDER_HISTORY = [
        URI => 'order-history',
        VIEW => 'supplier-views.delivery-man.wallet.order-history'
    ];
    const ORDER_STATUS_HISTORY = [
        URI => 'order-history-status',
        VIEW => 'supplier-views.delivery-man.wallet._order-status-history'
    ];
    const EARNING = [
        URI => 'earning',
        VIEW => 'supplier-views.delivery-man.wallet.earning'
    ];
    const CASH_COLLECT = [
        URI => 'cash-collect',
        VIEW => 'supplier-views.delivery-man.wallet.cash-collect'
    ];
}
