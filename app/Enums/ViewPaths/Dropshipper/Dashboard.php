<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Dashboard
{
    const INDEX = [
        URI => '/',
        VIEW => 'dropshipper-views.dashboard.index',
        ROUTE => 'dropshipper.dashboard.index'
    ];
      
    const ORDER_STATUS = [
        URI => 'order-status',
        VIEW => 'dropshipper-views.partials._dashboard-order-status'
    ];
    const EARNING_STATISTICS = [
        URI => 'earning-statistics',
        VIEW => 'dropshipper-views.dashboard.partials.earning-statistics'
    ];
    const WITHDRAW_REQUEST = [
        URI => 'withdraw-request',
        VIEW => ''
    ];
    const METHOD_LIST = [
        URI => 'method-list',
        VIEW => ''
    ];


}
