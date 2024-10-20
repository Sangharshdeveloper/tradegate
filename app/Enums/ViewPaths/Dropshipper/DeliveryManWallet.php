<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum DeliveryManWallet
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.delivery-man.wallet.index',
        ROUTE => 'dropshipper.delivery-man.withdraw.index',
    ];
    const ORDER_HISTORY = [
        URI => 'order-history',
        VIEW => 'dropshipper-views.delivery-man.wallet.order-history'
    ];
    const ORDER_STATUS_HISTORY = [
        URI => 'order-history-status',
        VIEW => 'dropshipper-views.delivery-man.wallet._order-status-history'
    ];
    const EARNING = [
        URI => 'earning',
        VIEW => 'dropshipper-views.delivery-man.wallet.earning'
    ];
    const CASH_COLLECT = [
        URI => 'cash-collect',
        VIEW => 'dropshipper-views.delivery-man.wallet.cash-collect'
    ];
}
